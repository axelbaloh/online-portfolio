// ==========================
// IMPORTS
// ==========================
import * as THREE from "three";
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";
import WebGL from "three/examples/jsm/capabilities/WebGL.js";
import { ColladaLoader } from "three/examples/jsm/loaders/ColladaLoader.js";
import { MyFirstPersonControls } from "../modules/MyFirstPersonControls.mjs";

// ==========================
// WEBGL CHECK
// ==========================
if (!WebGL.isWebGL2Available()) {
	const warning = WebGL.getWebGL2ErrorMessage();
	document.getElementById("container").appendChild(warning);
}

// ==========================
// RENDERER
// ==========================
const renderer = new THREE.WebGLRenderer({ antialias: true });

const container = document.getElementById("container");

if (!container) {
	console.warn("Three.js: container not found, script aborted");
	return;
}

renderer.setSize(
	container.clientWidth,
	container.clientHeight
);

container.appendChild(renderer.domElement);

renderer.setClearColor(0x87ceeb, 1.0);
renderer.clear();

// ==========================
// CAMERA
// ==========================
const fov = 45;
const aspect = window.innerWidth / window.innerHeight;
const near = 0.1;
const far = 500;

const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);

camera.position.set(-80, 10, 0);
camera.up = new THREE.Vector3(0, 1, 0);
camera.lookAt(0, 0, 0);

// ==========================
// SCENE
// ==========================
const scene = new THREE.Scene();

// ==========================
// COLLISIONS
// ==========================
const colliders = [];

function addCollider(mesh) {
	mesh.updateMatrixWorld(true);

	const box = new THREE.Box3().setFromObject(mesh);

	colliders.push(box);
}

// ==========================
// CONTROLS (désactivés au départ)
// ==========================
let controls = null;

// ==========================
// TIMER
// ==========================
const timer = new THREE.Timer();


// ==========================
// MODEL
// ==========================
const loader = new ColladaLoader();

loader.load(
	"/assets/models/victoire.dae",
	function (collada) {

		const dae = collada.scene;

		dae.position.set(50, 1.75, 0);
		dae.rotation.x = -Math.PI / 2;
		dae.rotation.z = -Math.PI / 2;

		scene.add(dae);

		addCollider(dae);
	}
);

// ==========================
// RESIZE
// ==========================
window.addEventListener("resize", onWindowResize, false);

function onWindowResize() {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();

	renderer.setSize(window.innerWidth, window.innerHeight);
}

// ==========================
// LIGHTS
// ==========================
const ambient = new THREE.AmbientLight(0x555555, 4.0);
scene.add(ambient);

const light1 = new THREE.DirectionalLight(0xffffff, 4.0);
light1.position.set(-100, 100, -100);
light1.castShadow = true;
scene.add(light1);

light1.shadow.mapSize.width = 4096;
light1.shadow.mapSize.height = 4096;

const d = 150;
light1.shadow.camera.left = -d;
light1.shadow.camera.right = d;
light1.shadow.camera.top = d;
light1.shadow.camera.bottom = -d;
light1.shadow.camera.near = 0.5;
light1.shadow.camera.far = 250;
light1.shadow.bias = -0.0001;

// ==========================
// FLOOR
// ==========================
const floorTexture = new THREE.TextureLoader().load(
	"/assets/textures/floor.png"
);

floorTexture.wrapS = THREE.RepeatWrapping;
floorTexture.wrapT = THREE.RepeatWrapping;
floorTexture.repeat.set(10, 5);

const floorMaterial = new THREE.MeshLambertMaterial({
	map: floorTexture
});

const floorGeometry = new THREE.PlaneGeometry(200, 100, 200, 100);
floorGeometry.rotateX(-Math.PI / 2);

const floor = new THREE.Mesh(floorGeometry, floorMaterial);
floor.receiveShadow = true;

scene.add(floor);

// ==========================
// MURS
// ==========================
const wallMaterial = new THREE.MeshPhongMaterial({ color: 0xffffff });

const wallGeometryX = new THREE.BoxGeometry(200, 20, 1);

const wallE = new THREE.Mesh(wallGeometryX, wallMaterial);
wallE.position.set(0, 10, 50);
wallE.castShadow = true;
wallE.receiveShadow = true;
scene.add(wallE);
addCollider(wallE);

const wallW = new THREE.Mesh(wallGeometryX, wallMaterial);
wallW.position.set(0, 10, -50);
wallW.castShadow = true;
wallW.receiveShadow = true;
scene.add(wallW);
addCollider(wallW);

const wallGeometryZ = new THREE.BoxGeometry(1, 20, 100);

const wallN = new THREE.Mesh(wallGeometryZ, wallMaterial);
wallN.position.set(100, 10, 0);
wallN.castShadow = true;
wallN.receiveShadow = true;
scene.add(wallN);
addCollider(wallN);

const wallS = new THREE.Mesh(wallGeometryZ, wallMaterial);
wallS.position.set(-100, 10, 0);
wallS.castShadow = true;
wallS.receiveShadow = true;
scene.add(wallS);
addCollider(wallS);

// ==========================
// CLOISON CENTRALE
// ==========================
const midWallGeom = new THREE.BoxGeometry(1, 20, 40);

const midWallE = new THREE.Mesh(midWallGeom, wallMaterial);
midWallE.position.set(0, 10, 30);
scene.add(midWallE);
addCollider(midWallE);

const midWallW = new THREE.Mesh(midWallGeom, wallMaterial);
midWallW.position.set(0, 10, -30);
scene.add(midWallW);
addCollider(midWallW);

// ==========================
// VERRE / VERRIÈRE
// ==========================
const sphereGeometry = new THREE.SphereGeometry(
	80,
	20,
	10,
	0,
	Math.PI * 2,
	0,
	Math.PI / 2
);

sphereGeometry.scale(1.8, 0.5, 1);
sphereGeometry.translate(0, 8, 0);

const glassMaterial = new THREE.MeshStandardMaterial({
	color: 0xffffff,
	transparent: true,
	opacity: 0.35,
	side: THREE.DoubleSide
});

const glassMesh = new THREE.Mesh(sphereGeometry, glassMaterial);
scene.add(glassMesh);

// ==========================
// OBJETS DIVERS
// ==========================
const Bancgeometry = new THREE.BoxGeometry(20, 2.5, 5);

const banc = new THREE.Mesh(Bancgeometry, wallMaterial);
banc.position.set(-50, 3, 0);
scene.add(banc);
addCollider(banc);

const Soclegeometry = new THREE.BoxGeometry(8, 2, 8);

const socle = new THREE.Mesh(Soclegeometry, wallMaterial);
socle.position.set(50, 1.5, 0);
scene.add(socle);
addCollider(socle);

// ==========================
// Création des peinture 
// ==========================

const paintingNearLeft = createPainting(
	"/assets/textures/paintings/sae402.png",
	"SAE402 - Créer un jeu vidéo en 3D",
	"Réalisé sur Unity",
	"Cette scène est la quatrième scène du jeu, elle représente un papillon se réfugiant dans un tronc d'arbre et y trouvant un fruit doré le fruit est le papillon ont été modélisés par mes soins et j'ai églament travaillé les contrôles, le placement des caméras et l\'éclairage de la scène"
);

paintingNearLeft.position.x = -75;
paintingNearLeft.position.y = 10;
paintingNearLeft.position.z = -49.5;


const paintingNearLeft2 = createPainting(
	"/assets/textures/paintings/bot-peak.png",
	"Bot discord - Peak Bot",
	"Réalisé via Python",
	"Bot Discord réalisé afin de publier les nouvelles vidéos short youtube et les mises à jour steam sur un serveur discord personnel"
);

paintingNearLeft2.position.x = -25;
paintingNearLeft2.position.y = 10;
paintingNearLeft2.position.z = -49.5;




const paintingNearRight1 = createPainting(
	"/assets/textures/paintings/tp-ra-DI6.png",
	"TP2 Dispositifs Interactifs 6",
	"Réalisé sur Unity",
	"Cette scène est une scène en réalité augmentée que nous avions à compléter afin que le personnage apparaisse sur la carte via la caméra frontale de nos PC et que l'on puisse intéragir avec ce personnage via des boutons et animations."
);

paintingNearRight1.position.x = -75;
paintingNearRight1.position.y = 10;
paintingNearRight1.position.z = 49.5;

paintingNearRight1.rotation.y = -Math.PI;


const paintingNearRight2 = createPainting(
	"/assets/textures/paintings/tp-rv-DI6.png",
	"TP1 Dispositifs Interactifs 6",
	"Réalisé sur Unity",
	"Cette scène est une scène en réalité virtuelle que nous avions à compléter afin que le joueur puisse intéragir avec le décor, le sol bleu représente les endroits ou le joueur peut se déplacer"
);

paintingNearRight2.position.x = -25;
paintingNearRight2.position.y = 10;
paintingNearRight2.position.z = 49.5;

paintingNearRight2.rotation.y = -Math.PI;

// ==========================
// PAINTING FUNCTION
// ==========================
function createPainting(texturePath, title, stack, description) {

	const loader = new THREE.TextureLoader();

	const paintingTexture = loader.load(
		texturePath,
		(tex) => {
			tex.colorSpace = THREE.SRGBColorSpace;
		},
		undefined,
		(err) => {
			console.error("Texture failed to load:", texturePath, err);
		}
	);

	const frameMaterial = new THREE.MeshLambertMaterial({
		color: 0x8B5A2B
	});

	const materials = [
		frameMaterial, // right
		frameMaterial, // left
		frameMaterial, // top
		frameMaterial, // bottom
		new THREE.MeshBasicMaterial({ map: paintingTexture }), // front
		frameMaterial  // back
	];

	const paintgeometry = new THREE.BoxGeometry(18, 12, 1);

	const painting = new THREE.Mesh(paintgeometry, materials);

	painting.userData = {
		title,
		stack,
		description
	};

	scene.add(painting);

	return painting;
}


// ==========================
// OVERLAY (UI INSTRUCTIONS)
// ==========================
const overlay = document.getElementById("instructions-overlay");
const closeBtn = document.getElementById("close-instructions");

closeBtn.addEventListener("click", () => {
	overlay.style.display = "none";

	controls = new MyFirstPersonControls(
		camera,
		renderer.domElement
	);

	controls.setLookHeight(8.0);
	controls.setMoveSpeed(15.0);

	controls.colliders = colliders;
controls.playerRadius = 2;
});

// Si l'utilisateur quitte la fenêtre ou change d'onglet, on réinitialise les entrées du contrôleur pour éviter que le personnage continue à se déplacer tout seul.
window.addEventListener("blur", () => {
	if (controls) {
		controls.resetInputs();
	}
});

// Si l'utilisateur change d'onglet, on réinitialise les entrées du contrôleur pour éviter que le personnage continue à se déplacer tout seul.
document.addEventListener("visibilitychange", () => {
	if (document.hidden && controls) {
		controls.resetInputs();
	}
});

// ==========================
// RENDER LOOP
// ==========================
function render() {
	timer.update();

	const delta = timer.getDelta();

	if (controls) {
		controls.update(delta);
	}

	const infoBox = document.getElementById("painting-info");
	const titleElement = document.getElementById("painting-title");
	const stackElement = document.getElementById("painting-stack");
	const descriptionElement = document.getElementById("painting-description");

	const paintings = [
		paintingNearLeft,
		paintingNearLeft2,
		paintingNearRight1,
		paintingNearRight2,
	];

	let nearestPainting = null;
	let nearestDistance = Infinity;

	for (const painting of paintings) {

		const distance =
			camera.position.distanceTo(
				painting.position
			);

		if (distance < 20 && distance < nearestDistance) {

			nearestDistance = distance;
			nearestPainting = painting;
		}
	}

	if (nearestPainting) {

		infoBox.style.display = "block";

		titleElement.textContent =
			nearestPainting.userData.title;

		stackElement.textContent =
			nearestPainting.userData.stack

		descriptionElement.textContent =
			nearestPainting.userData.description;
	}
	else {

		infoBox.style.display = "none";
	}

	renderer.render(scene, camera);

	requestAnimationFrame(render);
}

render();
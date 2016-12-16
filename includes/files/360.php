
	<div id="sphere"></div>
	<div class="kk"></div>
		
	<script src="js/js_pan/three.min.js"></script>
	<script src="js/js_pan/OrbitControls.js"></script>	
	<script src="js/js_pan/Detector.js"></script>		
	<script>

		var webglEl = document.getElementById('sphere');

		var width  = window.innerWidth,
			height = window.innerHeight - 50;

		var scene = new THREE.Scene();

		var camera = new THREE.PerspectiveCamera(75, width / height, 1, 1000);
		camera.position.x = 0.1;

		var renderer = Detector.webgl ? new THREE.WebGLRenderer() : new THREE.CanvasRenderer();
		renderer.setSize(width, height);

		var sphere = new THREE.Mesh(
			new THREE.SphereGeometry(100, 20, 20),
			new THREE.MeshBasicMaterial({
				map: THREE.ImageUtils.loadTexture('images/jm/LAWN.jpg')
			})
		);
		sphere.scale.x = -1;
		scene.add(sphere);

		var controls = new THREE.OrbitControls(camera);
		controls.noPan = true;
		controls.noZoom = true; 
		controls.autoRotate = true;
		controls.autoRotateSpeed = 0.5;

		webglEl.appendChild(renderer.domElement);

		render();

		function render() {
			controls.update();
			requestAnimationFrame(render);
			renderer.render(scene, camera);
		}

	</script>
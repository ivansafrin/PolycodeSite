<?
	$body_type = "blue";
	require_once("../site/header.php");
?>
	</div>
	<div class="feat feat_1">
	<div class="container">
	  <div class="row">
		<div class="col-md-8">
			<h3 class="fh2">Cross-platform app development in C++ or Lua.</h3>
			<p>Polycode's core is written in C++ and currently runs on Mac, Windows and Linux with iOS and Android support planned in the future. All platform-specific functionality is abstracted into a cross-platform core and implemented natively on each platform, so the same C++ code will compile on each supported platform out of the box.</p>
			<p>Polycode can also be used as a purely scripted Lua framework via the Polycode IDE. Applications developed in Lua can be exported directly to all supported platforms.</p>
		</div>
		<div class="col-md-4">
			<img class="hidden-sm hidden-xs" style="padding-top: 40px" height="170px" src="/images/feature_crossplatform.svg"/>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_2">
	<div class="container">
	  <div class="row">
		<div class="col-md-4">
			<img class="hidden-sm hidden-xs" style="padding-left: 70px" height="150" src="/images/feature_opensource.svg"/>
		</div>
		<div class="col-md-8">
			<h3 class="fh2">Free and open source.</h3>
			<p>Polycode is completely free and open source under the MIT License. All of Polycode's development happens publicly on Github and community pull requests are regularly reviewed.</p>
			<p>Even this website is open source and setup for community improvement.</p>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_3">
	<div class="container">
		<div class="centerh"><h2 class="fh2">Polycode IDE.</h2></div>

	  <div class="row">
		<div style="width: 100%; text-align: center"><img src="/images/feature_ide_big.png" width="100%"/></div>
		<div>
			<p>Polycode is distributed as a C++ library in tandem with a standalone IDE. You can...</p>
			<ul>
				<li>Use Polycode as a C++ framework and ignore the IDE entirely.</li>
				<li>Use Polycode as a C++ framework and use the IDE to edit content.</li>
				<li>Write code directly in the IDE using Lua.</li>
			</ul>
			<p>If you write all your code in Lua, you can export your application to any of the supported platforms directly from the IDE.</p>
			<p>The IDE lets you create and edit Polycode material files, scenes, sprites and Lua and shader scripts.</p>
			<p>The Polycode IDE is written completely in Polycode and uses the Polycode UI module for all of its UI.</p>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_4">
	<div class="container">
	<div class="centerh"><h2 class="fh3">2D and 3D graphics.</h2></div>

	  <div class="row">
			<h4 class="fh3">Scene graph entity system.</h4>
			<p>Polycode provides scene rendering in 2D and 3D via its entity-based scene graph. Though direct access to the renderer is always available, most of Polycode's strength comes from its automatic management and rendering of scene entities. Polycode takes care of things like frustum culling, lights management and material application.</p>
			<p>Scenes can be rendered in 2D and 3D via dynamic cameras and scenes/entities can be edited visually in the Polycode IDE.</p>
	  </div>

	  <div class="row fhs">
		<div class="col-md-4">
			<img style="margin-top: 20px" src="/images/features_materials.svg" height="140"/>
		</div>
		<div class="col-md-8">
			<h4 class="fh3">Materials and shaders.</h4>
			<p>Polycode's material system allows you to define shader-based materials and multi-pass post-processing filters. You can define materials in material XML files which you can visually edit in the Polycode IDE or create manually in code.</p>
			<p>Polycode's shader system is abstracted and currently implemented in GLSL for the OpenGL renderer.</p>
		</div>
	  </div>

	  <div class="row fhs">
			<h4 class="fh3">Mesh rendering and skeletal animation.</h4>
			<p>Polycode can import meshes and skeletal animation from a variety of different file types to its native mesh, skeleton and animation formats. The skeletal animation system supports weighted animation blending and entity to bone attachment.</p>
	  </div>

	</div>
	</div>

	<div class="feat feat_4">
	<div class="container">
	  <div class="row">
		<div class="col-md-8">
			<h3 class="fh3">Audio.</h3>
			<p>Polycode supports sound playback from WAV and OGG formats and custom audio data buffers, as well as sound recording from sytem's sound input devices. Positional 2D and 3D sound is also supported by the scene graph with positional sound placement support in the Polycode IDE.</p>
		</div>
		<div class="col-md-4">
			<img class="hidden-sm hidden-xs" style="margin-left: 50px" src="/images/feature_sound.svg" height="140px"/>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_4">
	<div class="container">
	  <div class="row">
		<div class="col-md-4">
			<img class="hidden-sm hidden-xs" style="margin-left: 50px" src="/images/feature_input.svg" width="200px"/>
		</div>
		<div class="col-md-8">
			<h3 class="fh3">Input.</h3>
			<p>Polycode supports full keyboard, mouse and joystick/gamepad input. Multi-touch input is provided on supported platforms as well as via the TUIO module.</p>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_3">
	<div class="container">
	  <div class="row">
		<div class="col-md-8">
			<h3 class="fh3">Networking.</h3>
			<p>UDP-based peer-to-peer or server-client networking system with reliable packet support (currently C++ only).</p>
		</div>
		<div class="col-md-4">
			<img class="hidden-sm hidden-xs" src="/images/feature_networking.svg" height="120px"/>
		</div>
	  </div>
	</div>
	</div>

	<div class="feat feat_4">
	<div class="container">
	<div class="centerh"><h2 class="fh3">UI.</h2></div>

	  <div class="row">
		<div class="hidden-sm hidden-xs" style="margin: 10px auto 30px auto; width: 600px; display: block"><img src="/images/feature_ui.svg" /></div>
		<div>
			<p>Polycode comes with a UI module that includes buttons, checkboxes, slides, color pickers, file dialogs, scroll bars, text input, menus and windows. It's fully skinnable and comes with light and dark default themes which include a high-reslution retina-ready version.</p>
		</div>
	  </div>

	</div>
	</div>

	<div class="feat feat_4">
	<div class="container">
	  <div class="row">
		<div class="col-md-8">
			<h3 class="fh3">2D and 3D Physics and collision.</h3>
			<p>Polycode comes with a 3D physics module that integrates the Bullet physics engine with Polycode's scene graph system for automatic physics simulation and collision detection, character controller and vehicle simulation.</p>
			<p>Polycode also includes a 2D physics module which integrates Box2D with its scene graph for automatic 2D physics simulation and collision detection.</p>
		</div>
		<div class="col-md-4">
			<img style="margin-top: 30px" class="hidden-sm hidden-xs" src="/images/feature_physics.svg" height="120px"/>
		</div>
	  </div>
	</div>
	</div>

	<div class="container">
<?
	require_once("../site/footer.php");
?>

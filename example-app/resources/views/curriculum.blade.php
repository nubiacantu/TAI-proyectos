<!-- crear una directiva para incluir la navegacion-->
@extends('layouts.app')
    @section('titulo')
        Curriculum
    @endsection
    @section('banner')
	<header id="home">

        <!--inicio-->
        <div class="banner">
            <div class="container">
                
                <h1 >Hola,<br>Soy Nubia.</h1>
                <p >Estudiante en la Universidad Politécnica de Victoria cursando la carrera en Ingeniería en Tecnologías de la información. Amante de la programación y las páginas web.</p>
                <!--<a href="#about" class="scroll-link btn btn-white">Acerca de mi</a>	-->
            </div>
        </div>
		</header>
    @endsection
	
    @section('contenido')
		
    <!--curriculum-->
	<section id="curriculum" class="section">
		<div class="title">
			<div class="container ">
				<div class="row">
					<!--imagen circular-->
					<div class="col-md-2 m-2">
						<img src="/img/me-circle.png" style="filter: drop-shadow(0 2px 5px rgba(204,113,92,0.7)); height: 200px; width: 200px;">
					</div>
					<div class="col-md-9 m-2">
						<!--comienzan los collapse-->
						<div class="accordion" id="accordionExample">
	                      <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingOne">
		                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                          Perfil personal
		                        </button>
	                        </h2>
	                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
	                        <div class="accordion-body">
	                          Estudiante destacada de la carrera de Ingeniería en Tecnologías de la Información con gran interés de superación, la habilidad de sencillo y rápido aprendizaje, trabajo en equipo y de liderazgo. Perseverante, disciplinada, responsable y enfocada en los detalles. Apasionada en la programación y el trabajo, actitud dinámica y entusiasta en el ámbito que se requiera. Busco desarrollar nuevas habilidades y deseo tener un lugar en el ámbito laboral para implementar los conocimientos que he adquirido a lo largo de mi vida académica.
	                        </div>
	                        </div>
	                      </div>
	                      <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingTwo">
	                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	                          Formación académica
	                        </button>
	                        </h2>
	                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
	                        <div class="accordion-body">
	                          <strong>Universidad Politécnica de Victoria</strong> <br>
	                          Ingeniería en Tecnologías de la Información &nbsp; (2020 - presente)
	                          <br><br>
	                          <strong>CBTis 271</strong> <br>
	                          Técnico en Programación  &nbsp; (2017 - 2020)
	                        </div>
	                        </div>
	                      </div>
	                      <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingThree">
	                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	                          Habilidades
	                        </button>
	                        </h2>
	                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
	                        <div class="accordion-body">
	                          <ul>
	                          	<li>Diseño y programación de páginas web.</li>
	                          	<li>Diseño y programación de aplicaciones de escritorio.</li>
	                          	<li>Manejo de paquetes de office (word, excel, power point).</li>
								<li>Administración y programación de bases de datos.</li>
								<li>Manejo de Internet y redes sociales.</li>
								<li>Capacidad de trabajo individual y en equipo.</li>
								<li>Capacidad de liderazgo y trabajo bajo presión.</li></li>
								<li>Creatividad e innovación.</li>
								<li>Capacidad de aprendizaje.</li>
								<li>Perseverancia en el logro de metas.</li>

	                          </ul>
	                        </div>
	                        </div>
	                      </div>
	                      <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingThree">
	                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	                          Certificaciones
	                        </button>
	                        </h2>
	                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
	                        <div class="accordion-body">
	                          	Python Essentials 1<br>
								 <strong>Cisco</strong><br><br>
								CCNA: Introduction to Networks<br>
								 <strong>Cisco</strong><br><br>
								CCNA: Switching, Routing, and Wireless Essentials<br>
								 <strong>Cisco</strong><br><br>
								Introduction to Cybersecurity<br>
								 <strong>Cisco</strong>
	                        </div>
	                        </div>
	                      </div>
	                      <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingThree">
	                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	                          Competencias informáticas
	                        </button>
	                        </h2>
	                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
	                        <div class="accordion-body">
	                        	<ul>
	                        		<li>Dominio de la Suite de Google.</li>
	                        		<li>Dominio de la Suite MS Office</li>
	                        		<li>Programación en Java, C, C++, PHP, JavaScript, SQL y Python</li>
	                        	</ul>
	                          
	                        </div>
	                    </div>	
					</div>
					<!--terminan collapse-->
				</div>
			</div>
		</div>
	</section>
    @endsection
	

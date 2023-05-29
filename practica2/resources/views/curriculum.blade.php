<!-- crear una directiva para incluir la navegacion-->
@extends('layouts.app2')
    @section('titulo')
        Curriculum
    @endsection
   
	
    @section('contenido')
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="flex gap-x-4">
          <img class="w-64 h-64  flex-none rounded-full bg-pink-50" src="/img/me.jpeg" alt="">
          <div class="min-w-0 flex-auto ">
            
            <div id="accordion-collapse" data-accordion="collapse">
              <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-red-400 border border-b-0 border-red-300 rounded-t-xl focus:ring-4 focus:ring-red-200 dark:focus:ring-red-800 dark:border-gray-700 dark:text-gray-900 hover:bg-pink-200 dark:hover:bg-pink-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                  <span>Perfil personal</span>
                  <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-red-300 dark:border-gray-700 dark:bg-gray-900">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Estudiante destacada de la carrera de Ingeniería en Tecnologías de la Información con gran interés de superación, la habilidad de sencillo y rápido aprendizaje, trabajo en equipo y de liderazgo. Perseverante, disciplinada, responsable y enfocada en los detalles. Apasionada en la programación y el trabajo, actitud dinámica y entusiasta en el ámbito que se requiera. Busco desarrollar nuevas habilidades y deseo tener un lugar en el ámbito laboral para implementar los conocimientos que he adquirido a lo largo de mi vida académica.</p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-red-400 border border-b-0 border-red-300 focus:ring-4 focus:ring-red-200 dark:focus:ring-red-800 dark:border-gray-700 dark:text-gray-400 hover:bg-pink-200 dark:hover:bg-pink-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                  <span>Formación académica</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-red-300 dark:border-gray-700">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    <strong>Universidad Politécnica de Victoria</strong> <br>
                    Ingeniería en Tecnologías de la Información &nbsp; (2020 - presente)
                    <br><br>
                    <strong>CBTis 271</strong> <br>
                    Técnico en Programación  &nbsp; (2017 - 2020)  
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-red-400 border border-b-0 border-red-300 focus:ring-4 focus:ring-red-200 dark:focus:ring-red-800 dark:border-gray-700 dark:text-gray-400 hover:bg-pink-200 dark:hover:bg-pink-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                  <span>Habilidades</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-red-300 dark:border-gray-700">
                  <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
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
              <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-red-400 border border-red-300 focus:ring-4 focus:ring-red-200 dark:focus:ring-red-800 dark:border-gray-700 dark:text-gray-400 hover:bg-pink-200 dark:hover:bg-pink-800" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                  <span>Certificaciones</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-red-300 dark:border-gray-700">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    Certified Entry-Level Python Programmer<br>
                    <strong> Python Institute </strong><br><br>
                    Python Essentials 1<br>
                    <strong>Cisco</strong><br><br>
                    CCNA: Introduction to Networks<br>
                    <strong>Cisco</strong><br><br>
                    CCNA: Switching, Routing, and Wireless Essentials<br>
                    <strong>Cisco</strong><br><br>
                    Introduction to Cybersecurity<br>
                    <strong>Cisco</strong>
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-5">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-red-400 border border-t-0 border-red-300 rounded-b-xl focus:ring-5 focus:ring-red-200 dark:focus:ring-red-800 dark:border-gray-700 dark:text-gray-400 hover:bg-pink-200 dark:hover:bg-pink-800" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                  <span>Competencias informáticas</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5 border border-t-0 border-red-300 dark:border-gray-700">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                      <li>Dominio de la Suite de Google.</li>
                      <li>Dominio de la Suite MS Office</li>
                      <li>Programación en Java, C, C++, PHP, JavaScript y Python.</li>
                      <li>Administración de bases de datos con Oracle y MySQL.</li>
                      <li>Uso de frameworks como Laravel.</li>
                      <li>Manejo de la librerías de diseño como bootstrap.</li>
                      <li>Manejo de control de versiones con Git.</li></li>
                      <li>En aprendizaje de: aplicaciones móviles con Andriod Studio, conocimientos básicos de inteligencia artificial y UI/UX.                  </li>
                    </ul>
                  </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    @endsection


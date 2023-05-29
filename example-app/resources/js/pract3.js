//getbounding devuelve el tamaño de un elemnto y su posicion relativa  la ventana grafica
//pageoffset propiedad de ventana de oslo lectura que devuelve el numero de pixeledes que el documento ha desplazado verticalemente
//slice extrae ena seccion de una cadena
//offsettop un numero que representa la posicion superior del elemento, en pixeles
//getelementbyid devuelve una referencia al elemento por su id
// Obtener una referencia al botón que muestra el modal

const date=document.getElementById("date")
date.innerHTML=new Date().getFullYear();

//queryslector trae el primer que encuentra que conincida con la clase que se esta mandadndo
const navToggle=document.querySelector(".nav-toggle")
const linkscontainer=document.querySelector(".links-container")
const links=document.querySelector(".links")
navToggle.addEventListener("click",function(){
	const linksHeight=links.getBoundingClientRect().height;
	const containerHeigth=linkscontainer.getBoundingClientRect().height

	if (containerHeigth==0) {
		linkscontainer.style.height= `${linksHeight}px`

	}else{
		linkscontainer.style.height=0
	}
});

const navbar=document.getElementById("nav")
const toplink =document.querySelector(".top-link")
window.addEventListener("scroll", function(){
	const scrollheight = window.pageYOffset
	const navHeight = navbar.getBoundingClientRect().height
	if(scrollheight>navHeight){
		navbar.classList.add("fixed-nav")
	}else{
		navbar.classList.remove("fixed-nav")
	}

	if (scrollheight>500) {
		toplink.classList.add("show-link")
	}else{
		toplink.classList.remove("show-link")
	}
});

const scrollLinks=document.querySelectorAll(".scroll-link")
scrollLinks.forEach((link)=>{
	link.addEventListener("click",(e)=>{
		e.preventDefault()
		const id = e.currentTarget.getAttribute("href").slice(1)
		const element=document.getElementById(id)
		//navegar a lugar especifico
		const navHeight = navbar.getBoundingClientRect().height
		const containerHeigth=linkscontainer.getBoundingClientRect().height

		const fixedNav = navbar.classList.contains("fixed-nav")
		let position =element.offsetTop - navHeight
		if(!fixedNav){
			position=position- navHeight
		}

		if(navHeight > 82){
			position = position +containerHeigth
		}
		window.scrollTo({
			left:0,
			top:position,
		});
		linkscontainer.style.height=0
	});
});


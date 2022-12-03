/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';









particlesJS("particles-js", {"particles":{"number":{"value":33,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":2.2,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
const zoneParalax = document.querySelectorAll('.parallax')
zoneParalax.forEach(zone=>{
    const parallax = zone.querySelectorAll('.layer')
    const move = {
        left:0,
        top : 0
    }
window.addEventListener('mousemove',e=>{
   move.left = (e.pageX-zone.offsetLeft) / zone.offsetWidth * 2 
   move.top = (e.pageY-zone.offsetTop) / zone.offsetHeight * 2 
                   //console.log(move)
   moveOBJ()
})
const moveOBJ = () => {

parallax.forEach(elem=>{
   const delta = parseFloat(elem.getAttribute('data-move'))
   const x = parseFloat(elem.getAttribute('data-x'))
   const y = parseFloat(elem.getAttribute('data-y'))
   elem.style.left = x + move.left*delta + "%"
   elem.style.top = y + move.top*delta + "%"
})

}
})

//motor annimation
let illo = new Zdog.Illustration({
    element: '.zdog-canvas',
    dragRotate: true,
});

let gear = new Zdog.Ellipse({
    addTo: illo,
diameter: 48,
stroke: 32,
color: '#7A807E',
scale: 2,
    translate: { x: 47, y: 30}
});
let gear2 = gear.copy({
    translate: { x: -56, y: -38 },
scale: 1.618
});

let modelCog = new Zdog.Box({    
    width: 4, // actually height
    height: 12, // width
    depth: 12,
    stroke: true,
    color: '#7A807E', // default face color
    leftFace: '#F5FFFD',
    rightFace: '#548077',
    topFace: '#A8FFEE',
    bottomFace: '#C4CCCA',
    translate: { x: -32,}
});
let eight_teeth = Array.from({ length: 8 });

let cogsAnchor = new Zdog.Anchor({
    addTo: gear,
})
let cogsAnchor2 = new Zdog.Anchor({
    addTo: gear2,
})

// first gear
eight_teeth.forEach((cog, i) => {
    const anchor = cogsAnchor.copy({
        rotate: { z: Math.PI * 2 / 8 * i }
    })

    cog = modelCog.copy({
        addTo: anchor,
    width: 4.5,
    height: 12.5
    })

})
//second gear
eight_teeth.forEach((cog, i) => {
    const anchor = cogsAnchor2.copy({
        rotate: { z: Math.PI * 2 / 8 * i }
    })

    cog = modelCog.copy({
        addTo: anchor,
    width: 4,
    translate: { x: -35 }
    })

})

// Initialise la variable pour vérifier si l'animation doit continuer
var isAnimating = false;

function animate() {
    // Fait tourner le premier engrenage dans le sens horaire
    gear.rotate.z -= 0.03;
    // Fait tourner le deuxième engrenage dans le sens antihoraire
    gear2.rotate.z += 0.03;

    illo.updateRenderGraph();

    // Si la variable isAnimating est vraie, demande au navigateur de rappeler la fonction animate à la prochaine frame
    if (isAnimating) {
        requestAnimationFrame(animate);
    }
}

illo.updateRenderGraph();

var bouton = document.getElementById("boutonmoteur");

bouton.addEventListener("click", function() {
    const xhr = new XMLHttpRequest();
    // Si le bouton affiche "OFF"
    if (bouton.textContent == "OFF") {
        // Change le texte du bouton pour "ON"
        bouton.textContent = "ON";
        // Arrête l'animation en mettant la variable isAnimating à false
        isAnimating = false;
        //envoie route Arduino
        xhr.open("GET", "http://192.168.137.10/eteindre_moteur");
    } 
    // Sinon, si le bouton affiche "ON"
    else if (bouton.textContent == "ON"){
        // Lance l'animation en mettant la variable isAnimating à true
        isAnimating = true;
        animate();
        // Change le texte du bouton pour "OFF"
        bouton.textContent = "OFF"
        //envoie route Arduino
        xhr.open("GET", "http://192.168.137.10/allumer_moteur");
    }
    xhr.send();
});
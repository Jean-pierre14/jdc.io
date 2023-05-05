gsap.registerPlugin(Flip);

const links = document.querySelectorAll('.nav-item a'),
    activeNav = document.querySelector('.active-nav');

// alert("Code")

links.forEach(link => {
    link.addEventListener('click', () => {
        
        gsap.to(links, {color: '#252525'});

        if(document.activeElement === link){

            gsap.to(link, {color: '#385ae0'});
        
        }

        // Deplacer la ligne
        const state = Flip.getState(activeNav);

        link.appendChild(activeNav);

        Flip.from(state, {
            duration: 1.5,
            absolute: true,
            ease: "elastic.out(1,0.5)"
        })
    })

    
})
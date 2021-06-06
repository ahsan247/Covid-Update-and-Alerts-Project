class AgendaSwitcher {
    constructor() {
        this.exists = true;
        this.getNodes();
        
        if(this.exists)  this.addEventListeners();
    }
    
    getNodes() {
        this.activeNode = document.querySelector(".agenda-switcher__active");
        this.switchLinks = Array.from(document.querySelectorAll(".agenda-switcher__link"));
        
        if(!this.activeNode || this.switchLinks.length <= 0)  this.exists = false;
    }
    
    addEventListeners() {
        this.switchLinks.map(switchLink => switchLink.addEventListener("click", this.setActive.bind(this)));
    }
    
    setActive(event) {
        event.preventDefault();
        this.switchLinks.map(switchLink => switchLink.classList.remove("agenda-switcher__link--active"));
        
        event.target.classList.add("agenda-switcher__link--active");
        
        const index = this.getLinkIndex(event.target);
        this.startAnimation(index + 1);
        
        setTimeout(() => window.location.href = event.target.href, 500);
    }
    
    getLinkIndex(target) {
        return this.switchLinks.indexOf(target);
    }
    
    startAnimation(index) {
        this.activeNode.classList.remove("agenda-switcher__active--1", "agenda-switcher__active--2", "agenda-switcher__active--3", , "agenda-switcher__active--4");
        this.activeNode.classList.add(`agenda-switcher__active--${index}`);
    }
}

const agendaSwitcher = new AgendaSwitcher();
class Hamburger {
  constructor() {
    this.hamburger = document.querySelector(".hamburger");
    this.aside = document.querySelector(".main__aside");
    this.handleHamburger();
  }
  handleHamburger() {
    this.hamburger.addEventListener("click", () => {
      this.aside.classList.toggle("main__aside--active");
    });
  }
}

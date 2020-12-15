class Hamburger {
  constructor() {
    this.hamburger = document.querySelector(".hamburger");
    this.aside = document.querySelector(".header__aside");
    this.spans = document.querySelectorAll(".hamburger__span");
    this.handleHamburger();
  }
  handleHamburger() {
    if (!this.hamburger) {
      return;
    }
    this.hamburger.addEventListener("click", () => {
      this.aside.classList.toggle("header__aside--active");
      console.log(this.spans);
      this.spans.forEach((item) =>
        item.classList.toggle("hamburger__span--active")
      );
    });
  }
}

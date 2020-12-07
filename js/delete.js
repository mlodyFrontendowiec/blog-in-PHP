class deleteSection {
  constructor() {
    this.delete = document.querySelector(".main__delete");
    this.sectionWelcome = document.querySelector(".main__welcome");
    this.deleteSection();
  }
  deleteSection() {
    this.delete.addEventListener("click", () => {
      this.sectionWelcome.remove();
    });
  }
}

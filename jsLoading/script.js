document.addEventListener("DOMContentLoaded", () => {
    const loaderWrapper = document.querySelector(".loader-wrapper");
  
    setTimeout(() => {
      loaderWrapper.classList.add("loader-hidden");
    }, 2000); 

    document.body.style.overflow = "hidden";
 
    loaderWrapper.addEventListener("transitionend", () => {
      loaderWrapper.style.display = "none";
        document.body.style.overflow = "";
    });
  });
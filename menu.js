document.addEventListener("DOMContentLoaded", function () {
    // Select all elements with the class 'dish-box'
    const dishBoxes = document.querySelectorAll(".dish-box");
  
    // Loop through each dish-box and attach a click event listener
    dishBoxes.forEach(function (box) {
        box.addEventListener("click", function () {
        // Find the dish-list within the clicked dish-box
            const dishList = box.querySelector(".dish-list");
  
        // Check if the dish-list has the 'show' class
            if (dishList.classList.contains("show")) {
                //If it has 'show', remove 'show' and add 'hidden'
                dishList.classList.remove("show");
                dishList.classList.add("hidden");
            }else if (dishList.classList.contains("hidden")) {
                // If it has 'hidden', remove 'hidden' and add 'show'
                dishList.classList.remove("hidden");
                dishList.classList.add("show");
            }
        });
    });
});
  

fetch("./galleria.json")
  .then(function (response) {
    return response.json();
  })
  .then((data) => {
    console.log(data), createPic(data);
  })
  .catch((error) => console.log(error));

let gallery = document.querySelector(".galleria");
let popUpWindow = document.querySelector(".popupwindow");
let closeBtn = document.querySelector(".close-btn");
closeBtn.addEventListener("click", closePopUpWindow);

//for loop som går igenom json objekt
function createPic(picture) {
  //picture är data (från fetch)
  picture.forEach((pic) => {
    //pic child till picture

    let divTag = document.createElement("div");
    let imageTag = document.createElement("img");
    let imageCaption = document.createElement("p");

    divTag.appendChild(imageTag); //bild i div
    gallery.appendChild(divTag);

    imageTag.src = pic.url; //hämtar json pic url och lägger den i imagetag src,vilket är kopplat till elementet img(i diven)
    imageCaption.title = pic.title;

    imageTag.addEventListener("click", () => {
      clickOnImagePopUp(pic.url, pic.title);
    });
  });
}

function clickOnImagePopUp(url, title) {
  // console.log('clicked');
  // let imageTagInPopUp = document.createElement('img');

  let imageTagInPopUp = document.createElement("img");
  let imageCaption = document.createElement("p");

  popUpWindow.appendChild(imageCaption);
  popUpWindow.appendChild(imageTagInPopUp);

  imageCaption.textContent = title;
  imageTagInPopUp.src = url;

  popUpWindow.style.display = "block";
}

function closePopUpWindow() {
  document.querySelector(".popupwindow img").remove(); //använde remove metod för att varje gång jag klicka på en bild så stackades dom i html(devtool)
  document.querySelector(".popupwindow p").remove(); //så om en bild var mindre än en annan, så såg man den förra bilden bakom den nuvarande bilden
  popUpWindow.style.display = "none";
}

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    closePopUpWindow();
  }
});

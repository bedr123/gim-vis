let galleryImages = document.querySelectorAll(".image-box")
let lastOpenedImage
let windowWidth = window.innerWidth
var dirId


if (galleryImages) {
    galleryImages.forEach(function(image, index) {
        image.onclick = function() {
            let getElementsCss = window.getComputedStyle(image)
            let getFullImageUrl = getElementsCss.getPropertyValue("background-image")
            let getImageUrlPos = getFullImageUrl.split('url("')
            let getNewUrlOfImage = getImageUrlPos[1].replace('")', '')
            let newUrlOfImage = getNewUrlOfImage.replace("thumb/", "")

            lastOpenedImage = index
            let lastOpenedImageId = image.id

            let container = document.body
            let newImgWindow = document.createElement("div")
            container.appendChild(newImgWindow)
            newImgWindow.setAttribute("class", "full-image-box")

            let imageBox = document.createElement("img")
            newImgWindow.appendChild(imageBox)
            imageBox.setAttribute("class", "full-image")
            imageBox.setAttribute("src", newUrlOfImage)
            imageBox.setAttribute("id", "current-image")

            let deleteBtn = document.createElement('i')
            deleteBtn.setAttribute("class", "fa-solid fa-trash-can")
            deleteBtn.setAttribute("onclick", "triggerDelete(" + lastOpenedImageId + ")")
            newImgWindow.appendChild(deleteBtn)
    
            let xMark = document.createElement('i')
            xMark.setAttribute("class", "fa-solid fa-xmark")
            xMark.setAttribute("onclick", "closeImage()")
            newImgWindow.appendChild(xMark)

            imageBox.onload = function() {
                let imgWidth = this.width
                let calcWidth = ((windowWidth - imgWidth) / 2) - 80

                if (lastOpenedImage !== 0) {
                    let prevBtn = document.createElement('i')
                    prevBtn.setAttribute("class", "fa-solid fa-arrow-left")
                    newImgWindow.appendChild(prevBtn)
                    prevBtn.setAttribute("onclick", "changeImage(0)")
                    prevBtn.style.cssText = "left: " + calcWidth + "px;"
                }
                
                if (galleryImages.length - 1 !== lastOpenedImage) {
                    let nextBtn = document.createElement('i')
                    nextBtn.setAttribute("class", "fa-solid fa-arrow-right")
                    newImgWindow.appendChild(nextBtn)
                    nextBtn.setAttribute("onclick", "changeImage(1)")
                    nextBtn.style.cssText = "right: " + calcWidth + "px;"
                }
                
            }    
        }
    })
}

function setId(dId) {
    dirId = dId
}

function triggerDelete(id) {
    if (confirm("Da li zelite izbrisati ovu sliku?"))
    document.getElementById(id + "-delete").click()
}

function closeImage() {
    document.querySelector(".full-image-box").remove()
}

function changeImage(i) {
    document.querySelector("#current-image").remove()

    document.querySelector(".fa-trash-can").remove()

    let btnDeleted = false

    let imgWindow = document.querySelector('.full-image-box')

    let calcNewImage
    if (i === 0) {
        calcNewImage = lastOpenedImage - 1
        if (calcNewImage === 0) {
            document.querySelector(".fa-arrow-left").remove()
            btnDeleted = true
        }
      
    } else if (i === 1) {
        calcNewImage = lastOpenedImage + 1
        if (calcNewImage === galleryImages.length - 1) {
            document.querySelector(".fa-arrow-right").remove()
            btnDeleted = true
        }
    }

    let getNewImg = galleryImages[calcNewImage]
    let getCss = window.getComputedStyle(getNewImg)
    let getImageUrl = getCss.getPropertyValue("background-image")
    let getImageUrlreal = getImageUrl.split('url("')
    let urlNewImage = getImageUrlreal[1].replace('")', '')
    let urlfNewImage = urlNewImage.replace("thumb/", "")

    let newImg = document.createElement('img')
    imgWindow.appendChild(newImg)
    newImg.setAttribute("src", urlfNewImage)
    newImg.setAttribute("class", "full-image")
    newImg.setAttribute("id", "current-image")

    let imageId = getNewImg.id

    let deleteBtn2 = document.createElement('i')
    deleteBtn2.setAttribute("class", "fa-solid fa-trash-can")
    deleteBtn2.setAttribute("onclick", "triggerDelete(" + imageId + ")")
    imgWindow.appendChild(deleteBtn2)

    lastOpenedImage = calcNewImage

    newImg.onload = function() {
        let imgWidth = this.width
        let calcWidth = ((windowWidth - imgWidth) / 2) - 80

        let prevBtn = document.querySelector(".fa-arrow-left")
        if (!prevBtn && !btnDeleted) {
            let leftBtn = document.createElement('i')
            leftBtn.setAttribute("class", "fa-solid fa-arrow-left")
            imgWindow.appendChild(leftBtn)
            leftBtn.setAttribute("onclick", "changeImage(0)")
            leftBtn.style.cssText = "left: " + calcWidth + "px;"
        } else {
            prevBtn.style.cssText = "left: " + calcWidth + "px;"
        }
        

        let nextBtn = document.querySelector(".fa-arrow-right")
        if (!nextBtn && !btnDeleted) {
            let rightBtn = document.createElement('i')
            rightBtn.setAttribute("class", "fa-solid fa-arrow-right")
            imgWindow.appendChild(rightBtn)
            rightBtn.setAttribute("onclick", "changeImage(1)")
            rightBtn.style.cssText = "right: " + calcWidth + "px;"
        } else {
            nextBtn.style.cssText = "right: " + calcWidth + "px;"
        }
        
    }
}

// preview file
let fileInput = document.querySelector(".file-input")
let labelFile = document.querySelector(".l-file-input")

function preview() {
    labelFile.textContent = `${fileInput.files.length} Slika je Izabrano`
}
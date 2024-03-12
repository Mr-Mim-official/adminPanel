function showCategory() {


    if (document.getElementById('categoryList').style.visibility == 'hidden') {
        document.getElementById('categoryList').style.visibility = 'visible';
        document.getElementById('categoryList').style.maxHeight = '10000px';
    } else {
        document.getElementById('categoryList').style.visibility = 'hidden';
        document.getElementById('categoryList').style.maxHeight = '0px';

    }
}




function openWindow() {
    window.open('http://localhost:8000/admin/media', 'newWindow', 'width=550,height=450');

    function updateData(value) {
        let image = value.data;

        document.getElementById("imageHolder").innerHTML = image[0] + ' <input type="text"   id="selectorID" name="image" value=' + image[1] + '  hidden>';

        window.removeEventListener("message", updateData);
    }
    window.addEventListener("message", updateData);

}

function setImage(className, id) {

    addEventListener("click", () => {

        let image = [className, id];

        window.opener.postMessage(image, "*");
        window.close();

    })
}

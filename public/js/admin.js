function dodaj(){

    var files = document.querySelectorAll("#file")
    var b = true

    for(i = 0; i < files.length; i++){
        if(files[i].value == ''){
            b = false
        }
    }

    if(b == true){
        // document.querySelector(".files").innerHTML += '<div class="fileHandler"><input type="file" id="file" name="file"><button onclick="remove(this)">Usuń</button></div>'
        var div = document.createElement("div")
        div.classList.add("fileHandler")

        var inpt = document.createElement("input")
        inpt.type = "file"
        inpt.id = "file"

        var btn = document.createElement("button")
        btn.innerHTML = "Usuń"
        btn.addEventListener("click", function(){
            btn.closest(".fileHandler").remove()
        })

        div.appendChild(inpt)
        div.appendChild(btn)
        document.querySelector(".files").appendChild(div)
    }
}
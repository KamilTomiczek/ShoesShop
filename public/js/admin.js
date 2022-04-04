var x = 0

function dodaj(){

    x += 1

    var files = document.querySelectorAll("#file")
    var b = true

    for(i = 0; i < files.length; i++){
        if(files[i].value == ''){
            b = false
        }
    }

    if(b == true){
        var div = document.createElement("div")
        div.classList.add("fileHandler")

        var inpt = document.createElement("input")
        inpt.type = "file"
        inpt.id = "color" 
        inpt.name = "color[" + x + "]"

        var btn = document.createElement("button")

        var iobj = document.createElement("i")
        iobj.classList.add("fa-solid")
        iobj.classList.add("fa-circle-minus") 

        btn.appendChild(iobj)

        btn.innerHTML += "Usuń"
        btn.addEventListener("click", function(){
            btn.closest(".fileHandler").remove()
        })

        
        div.appendChild(inpt)
        div.appendChild(btn)
        document.querySelector(".files").appendChild(div)
    }
}
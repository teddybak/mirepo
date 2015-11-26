     function seleccionar_todo() {
        for (i = 0; i < document.myForm.elements.length; i++)
            if (document.myForm.elements[i].type == "checkbox")
                document.myForm.elements[i].checked = 1
    }



    function deseleccionar_todo() {
        for (i = 0; i < document.myForm.elements.length; i++)
            if (document.myForm.elements[i].type == "checkbox")
                document.myForm.elements[i].checked = 0
    }


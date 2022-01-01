document.getElementById("x").addEventListener('change', p);
document.getElementById("y").addEventListener('change', p);



function p(e) {
    document.getElementById("load").src = URL.createObjectURL(this.files[0])
    document.getElementById("load1").src = URL.createObjectURL(this.files[0])
    e.preventDefault();
}











$(function() {



    $(document).on("submit", "#add_record", function(e) {





        //ajax setup
        $.ajaxSetup({

                "headers": {
                    "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content")
                }


            })
            //insert data
        $.ajax({

            method: "post",
            url: "/insert",
            contentType: false,
            processData: false,
            data: new FormData(this),

        }).done(message => {

            // load_data();
            document.getElementById("add_record").reset();
            document.getElementById("load").src = ' ';
            let aleart = JSON.parse(message);
            if (aleart.success == true) {
                inject_alear_into_Dom();
            }

        })

        e.preventDefault();
    });

    function inject_alear_into_Dom() {
        let div = document.createElement("div");
        div.classList.add("aleart")
        div.classList.add("mt-3")
        div.classList.add("mb-3")

        let ul = document.createElement("ul");
        let li = document.createElement("li");
        li.appendChild(document.createTextNode("data_inserted_successfully"));
        ul.appendChild(li)
        div.appendChild(ul);
        document.querySelector("#err").appendChild(div);
        setTimeout(() => {

            div.remove();
        }, 2000);





    }
    // //load data

    function load_data(e) {

        $.ajax({
            url: "/load",
            method: "get",
            processData: false,
            contentType: false

        }).done(m => {

            $('#table_data').html(m)
        })

    }
    load_data()

    $('#data').DataTable();

    // edit
    $(document).on("click", ".edit", function(e) {


        let data = $(this).attr("x");
        $.ajax({

            method: "get",
            url: `/edit/${data}`,
            processData: false,
            contentType: false,
            async: false


        }).done(a => {

            let b = JSON.parse(a);
            let c = document.getElementById("load1");
            c.src = b.data.photo
            document.getElementById("name").value = b.data.name
            document.getElementById("roll").value = b.data.roll
            document.getElementById("email").value = b.data.email
                // document.getElementById("load").src = b.data.photo
        })
        e.preventDefault()

    })



});
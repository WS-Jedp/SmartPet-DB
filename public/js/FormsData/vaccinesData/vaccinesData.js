$(document).ready(function(){
    $('#closeAlert').click(e=>{
        e.preventDefault();
        $('#alertSuccess').removeClass('d-flex');
    });

    // Headers
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    // Create Vaccine
    $('#formCreateVaccine').submit(e=>{
        e.preventDefault();
        var dataNewVaccine = new FormData;
        let formCreateVaccine = $('#formCreateVaccine').serializeArray();
        formCreateVaccine.forEach(e=>{
            dataNewVaccine.append(e.name, e.value);
        });

        $.ajax({
           method: 'POST',
           url: '/vaccines/create',
           data: dataNewVaccine,
           contentType: false,
           processData: false,
           cache: false,
           success: data=>{
               if(data.status == 200){
                   console.log(data);
                   $('#alertSuccess').addClass('d-flex');
                   $('#titleAlert').text(data.message);
                   $('#formCreateVaccine input[type="text"]').val('');
                   $('#formCreateVaccine input[type="number"]').val('');
                   $('#formCreateVaccine textarea').val('');
               }else{
                   console.log(data);
               }
           } 
        });
    })

    // Edit vaccine
    $('#formEditVaccine').submit(e=>{
        e.preventDefault();
        var dataEditVaccine = new FormData;
        let formEditVaccine = $('#formEditVaccine').serializeArray();
        formEditVaccine.forEach(e=>{
            dataEditVaccine.append(e.name, e.value)
        });

        $.ajax({
            method: 'POST',
            url: '/vaccines/edit',
            data: dataEditVaccine,
            contentType: false,
            processData: false,
            cache: false,
            success: data=>{
                if(data.status==200){
                    console.log(data);
                    $('#alertSuccess').addClass('d-flex');
                    $('#titleAlert').text(data.message);
                }else{
                    console.log(data);
                }
            }
        });
    })

});

// Delete
function send_vaccineId(id){
    $('#dropVaccine').val(id);
}

function drop_vaccine(id){
    $.ajax({
        method: 'GET',
        url: `/vaccines/delete/${id}`,
        contentType: JSON,
        processData: false,
        cache: false,
        success: data=>{
            if(data.status == 200){
                location.reload();
                console.log(data);
            }
        }
    });
}
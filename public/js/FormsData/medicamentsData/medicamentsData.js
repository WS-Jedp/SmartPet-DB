$(document).ready(function(){

$('#closeAlert').click(e=>{
    e.preventDefault();
    $('#alertSuccess').removeClass('d-flex');
})

// Headers
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

// Create
$('#formCreateMedicament').submit(e=>{
    e.preventDefault();
    var dataNewMedicamet = new FormData;
    let formCreateMedicament = $('#formCreateMedicament').serializeArray();
    formCreateMedicament.forEach(e=>{
        dataNewMedicamet.append(e.name, e.value)
    });
    console.log(dataNewMedicamet);
    $.ajax({
        method: 'POST',
        url: '/medicaments/create',
        data: dataNewMedicamet,
        contentType: false,
        processData: false,
        cache: false,
        success: data=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
                $('#formCreateMedicament input[type="text"]').val('');
                $('#formCreateMedicament input[type="number"]').val('');
                $('#formCreateMedicament input[type="checkbox"]').disabled = true;
                $('#formCreateMedicament textarea').val('');
            }else{
                console.log(data);
            }
        }
    
    });
})
// Edit
$('#formEditMedicament').submit(e=>{
    e.preventDefault();
    var dataEditMedicament = new FormData;
    let formEditMedicament = $('#formEditMedicament').serializeArray();
    formEditMedicament.forEach(e=>{
        dataEditMedicament.append(e.name, e.value);
    });
    $.ajax({
        method: 'POST',
        url: '/medicaments/edit',
        data: dataEditMedicament,
        contentType: false,
        processData: false,
        cache: false,
        success: data=>{
            if(data.status == 200){
                console.log(data);
            }else{
                console.log(data)
            }
        }
    });

})

});

// Deletes
function send_medicamentId(id){
    $('#dropMedicament').val(id);
    console.log(id)
};

function drop_medicament(id){
    $.ajax({
        method: 'GET',
        url: `/medicaments/delete/${id}`,
        contentType: JSON,
        processData: false,
        cache: false,
        success: (data)=>{
            if(data.status == 200){
                location.reload();
                console.log(data);
            }
        }
        
    })
}
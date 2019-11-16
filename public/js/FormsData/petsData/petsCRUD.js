$(document).ready(function(){
// Close btn
$('#closeAlert').click(e=>{
    e.preventDefault();
    $('#alertSuccess').removeClass('d-flex');
})

    // headers
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Create
$('#formCreateTypePet').submit(e=>{
    e.preventDefault();
    var dataCreateType = new FormData;
    let formCreateTypePet = $('#formCreateTypePet').serializeArray();
    formCreateTypePet.forEach(e=>{
        dataCreateType.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/pets/type/create',
        data: dataCreateType,
        contentType: false,
        processData: false,
        cache: false,
        success: (data,Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
                $('#formCreateTypePet input[type="text"]').val('');
            }
        }
    });
})

// Edit
$('#formEditTypePet').submit(e=>{
    e.preventDefault();
    var dataTypeEdit = new FormData;
    let formTypePetEdit = $('#formEditTypePet').serializeArray();
    formTypePetEdit.forEach(e=>{
        dataTypeEdit.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/pets/type/edit',
        data: dataTypeEdit,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }else{
                console.log(Error)
            }
        }
    })
});

// ---------------- Genders pet ----------
// Create
$('#formCreateGenderPet').submit(e=>{
    e.preventDefault();
    var dataCreateGenderPet = new FormData;
    let formCreateGenderPet = $('#formCreateGenderPet').serializeArray();
    formCreateGenderPet.forEach(e=>{
        dataCreateGenderPet.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/pets/gender/create',
        data: dataCreateGenderPet,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, err )=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
                $('#formCreateGenderPet input[type="text"]').val('');
            }else{
                console.log(err);
            }
        }
    })
})

// Edit
$('#formEditGenderPet').submit(e=>{
    e.preventDefault();
    var dataEditGenderPet = new FormData;
    let formEditGenderPet = $('#formEditGenderPet').serializeArray();
    formEditGenderPet.forEach(e=>{
        dataEditGenderPet.append(e.name, e.value);
    });
    
    $.ajax({
        method: 'POST',
        url: '/pets/gender/edit',
        data: dataEditGenderPet,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }else{
                console.log('Ha ocurrido el error =', Error)
            }
        }
    });
});

// ---------------- Races pet ----------
// Create
$('#formCreateRacePet').submit(e=>{
    e.preventDefault();
    var dataCreateRacePet = new FormData;
    let formCreateRacePet = $('#formCreateRacePet').serializeArray();
    formCreateRacePet.forEach(e=>{
        dataCreateRacePet.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/pets/races/create',
        data: dataCreateRacePet,
        processData: false,
        contentType: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
                $('#formCreateRacePet input[type="text"]').val('');
                $('#id_type_pet').val($('#id_type_pet option:first').val());
            }else{
                console.log(Error)
            }
        }
    });
});

// Edit
$('#formEditRacePet').submit(e=>{
    e.preventDefault();
    var dataEditRacePet = new FormData;
    let formEditRacePet = $('#formEditRacePet').serializeArray();
    formEditRacePet.forEach(e=>{
        dataEditRacePet.append(e.name, e.value);
    })

    $.ajax({
        method: 'POST',
        url: '/pets/races/edit',
        data: dataEditRacePet,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }else{
                console.log(Error)
            }
        }
    });
})



});

// ---------------- Deletes ----------

// Type pet
function send_typePetId(id){
    $('#dropTypePet').val(id);
    console.log(id)
}

function drop_typePet(id){
    $.ajax({
        method: 'GET',
        url: `pets/type/delete/${id}`,
        contentType: JSON,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                location.reload();
                console.log(data);
            }else{
                console.log(Error)
            }
        }
    });
}

// Gender Pet
function send_genderPetId(id){
    $('#dropGenderPet').val(id);
}

function drop_genderPet(id){
    $.ajax({
        method: 'GET',
        url: `pets/gender/delete/${id}`,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data.status == 200){
                location.reload();
                console.log(data);
            }else{
                console.log(Error);
            }
        }

    });
}

// Race Pet
function send_racePetId(id){
    $('#dropRacePet').val(id);
}

function drop_racePet(id){
    $.ajax({
        method: 'GET',
        contentType: JSON,
        url: `/pets/races/delete/${id}`,
        cache: false,
        success: data=>{
            if(data.status == 200){
                location.reload();
                console.log(data);
            }
        }
    });
}
$(document).ready(function(){

// Close btn
$('#closeAlert').click(e=>{
    e.preventDefault();
    $('#alertSuccess').removeClass('d-flex');
})

    // ------------ Headers -------------
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// -------------- states pet -----------------
// Create
$('#formCreateStatePet').submit(e=>{
    e.preventDefault();
    var dataCreateStatePet = new FormData;
    let formCreateStatePet = $('#formCreateStatePet').serializeArray();
    formCreateStatePet.forEach(e=>{
        dataCreateStatePet.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/states/pets/create',
        data: dataCreateStatePet,
        contentType: false,
        cache: false,
        processData: false,
        success: (data, Error)=>{
           if(data.status == 200){
               console.log(data);
               $('#formCreateStatePet input[type="text"]').val('');
               $('#alertSuccess').addClass('d-flex');
               $('#titleAlert').text(data.message);
           }
        }
    });
});

// Edit
$('#formEditStatePet').submit(e=>{
    e.preventDefault();
    var dataEditStatePet = new FormData;
    let formEditaStatePet = $('#formEditStatePet').serializeArray();
    formEditaStatePet.forEach(e=>{
        dataEditStatePet.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/states/pets/edit',
        data: dataEditStatePet,
        contentType: false,
        processData: false,
        cache: false,
        success: (data, Error)=>{
            if(data){
                console.log(data);
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }else{
                console.log(Error)
            }
        }
    });
})

// -------------- states Date -----------------
// Create 
$('#formCreateStateDate').submit(e=>{
    e.preventDefault();
    var dataCreateStateDate = new FormData;
    let formCreateStateDate = $('#formCreateStateDate').serializeArray();
    formCreateStateDate.forEach(e=>{
        dataCreateStateDate.append(e.name, e.value)
    });

    $.ajax({
        method: 'POST',
        url: '/states/dates/create',
        data: dataCreateStateDate,
        contentType: false,
        processData: false,
        cache: false,
        success: (data,Error)=>{
            if(data.status == 200){
                console.log(data);
                $('#formCreateStateDate input[type="text"]').val('');
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }else{
                console.log(Error);
            }
        }
    });
})

// Edit
$('#formEditStateDate').submit(e=>{
    e.preventDefault();
    var dataEditStateDate = new FormData;
    let formEditStateDet = $('#formEditStateDate').serializeArray();
    formEditStateDet.forEach(e=>{
        dataEditStateDate.append(e.name, e.value);
    });

    $.ajax({
        method: 'POST',
        url: '/States/dates/edit',
        data: dataEditStateDate,
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
    
});



// -------------- states User -----------------
    // Form create state user
    $('#formCreateStateUser').submit(e=>{
        e.preventDefault();
        
        var dataStateUser = new FormData;
        let formStateUser = $('#formCreateStateUser').serializeArray();
        formStateUser.forEach(e=>{
            dataStateUser.append(e.name, e.value);
        })

        $.ajax({
            method: 'POST',
            url: '/states/users/create',
            data: dataStateUser,
            processData: false,
            cache: false,
            contentType: false,
            success: data=>{
                console.log(data);
                $('#formCreateStateUser Input[type="text"]').val('');
                $('#alertSuccess').addClass('d-flex');
                $('#titleAlert').text(data.message);
            }
        });
    })

    // Form edit state user
    $('#formEditStateUser').submit(e=>{
        e.preventDefault();
        var dataEditStateUser = new FormData;
        let formEditStateUser = $('#formEditStateUser').serializeArray();
        formEditStateUser.forEach(e=>{
            dataEditStateUser.append(e.name, e.value)
        });

        $.ajax({
            method: 'POST',
            url: '/states/users/edit',
            data: dataEditStateUser,
            contentType: false,
            processData: false,
            cache: false,
            success: (data,err)=>{
                if(data.status == 200){
                    console.log(data)
                    $('#alertSuccess').addClass('d-flex');
                    $('#titleAlert').text(data.message);
                }else{
                    console.log(err)
                }
            }
        });
    })





});

// Delete states

// State User
function sendDeleteId(id){
    $('#deleteState').val(id)
}

function dropState(id){

    $.ajax({
        method: 'GET',
        url: `/states/users/delete/${id}`,
        processData: false,
        contentType: JSON,
        cache: false,
        success: (data, err)=>{
            if(data.status = 200){
                console.log(data)
                location.reload();
            }else{
                console.log(err)
            }
        }
    })
}

// Delete State pet
function sendDeleteStatePetId(id){
    $('#deleteStatePet').val(id)
}

function dropStatePet(id){
    $.ajax({
        method: 'GET',
        url: `/states/pets/delete/${id}`,
        contentType: JSON,
        cache: false,
        processData: false,
        success: (data, Error)=>{
            if(data.status == 200){
                console.log(data);
                location.reload();
            }else{
                console.log(Error)
            }
        }
    })
}

// Delete State Date
function sendDeleteStateDateId(id){
    $('#deleteStateDate').val(id);
}

function dropStateDate(id){
    $.ajax({
        method: 'GET',
        url: `/states/dates/delete/${id}`,
        contentType: JSON,
        cache: false,
        processData: false,
        success: (data,Error)=>{
            if(data.status == 200){
                console.log(data);
                location.reload();
            }else{
                console.log(Error);
            }
        }
    });
}
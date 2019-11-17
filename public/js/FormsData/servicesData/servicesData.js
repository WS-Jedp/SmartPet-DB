$(document).ready(function(){
    $('#closeAlert').click(e=>{
        e.preventDefault();
        $('#alertSuccess').removeClass('d-flex');
    })

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // ---------------- Service ----------------
    $('#formCreateService').submit(e=>{
        e.preventDefault();
        var dataCreateService = new FormData;
        let formCreateService = $('#formCreateService').serializeArray();
        formCreateService.forEach(e=>{
            dataCreateService.append(e.name, e.value);
        });

        $.ajax({
            method: 'POST',
            url: '/services/create',
            data: dataCreateService,
            contentType: false,
            processData: false,
            cache: false,
            success: data=>{
                if(data.status == 200){
                    console.log(data);
                    $('#alertSuccess').addClass('d-flex');
                    $('#titleAlert').text(data.message);
                    $('#formCreateService input[type="text"]').val('');
                    $('#formCreateService input[type="text"]').val('');
                    $('#formCreateService textarea').val('');
                    $('#formCreateService select option:first').val();
                }else{
                    console.log(data)
                }
            }
        });
    });
    // Edit
    $('#formEditService').submit(e=>{
        e.preventDefault();
        var dataEditService = new FormData;
        let formEditService = $('#formEditService').serializeArray();
        formEditService.forEach(e=>{
            dataEditService.append(e.name, e.value);
        });

        $.ajax({
            method: 'POST',
            url: '/services/edit',
            data: dataEditService,
            contentType: false,
            processData: false,
            cache: false,
            success: data=>{
                if(data.status==200){
                    console.log(data);
                    $('#alertSuccess').addClass('d-flex');
                    $('#titleAlert').text(data.message);
                }else{
                    console.log(data)
                }
            }
        });
    })

    // ---------------- Timetables ----------------
    // Create timetable
    $('#formCreateTimetable').submit(e=>{
        e.preventDefault();
        var dataCreateTimetable = new FormData;
        let formCreateTimetable = $('#formCreateTimetable').serializeArray();
        formCreateTimetable.forEach(e=>{
            dataCreateTimetable.append(e.name, e.value);
        })

        $.ajax({
            method: 'POST',
            url: '/services/timetables/create',
            data: dataCreateTimetable,
            contentType: false,
            processData: false,
            cache: false,
            success: data=>{
                if(data.status==200){
                    console.log(data);
                    $('#alertSuccess').addClass('d-flex');
                    $('#titleAlert').text(data.message);
                    $('#formCreateTimetable input[type="text"]').val('');
                    $('#formCreateTimetable input[type="time"]').val('');
                    $('#formCreateTimetable select option:first').val();

                }else{
                    console.log(data)
                }
            }
        });
    })

    // Edit timetable
    $('#formEditTimetable').submit(e=>{
        e.preventDefault();
        var dataEditTimetable = new FormData;
        let formEditTimetalbe = $('#formEditTimetable').serializeArray();
        formEditTimetalbe.forEach(e=>{
            dataEditTimetable.append(e.name, e.value);
        })

        $.ajax({
            method: 'POST',
            url: '/services/timetables/edit',
            data: dataEditTimetable,
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
    });
});

// Deletes
// Drop timetable
function sendTimetableId(id){
    $('#dropTimetable').val(id);
    console.log(id)
}

function drop_Timetable(id){
    $.ajax({
        method: 'GET',
        url: `/services/timetables/delete/${id}`,
        contentType: false,
        processData: false,
        cache: false,
        success: data=>{
            if(data.status == 200){
                console.log(data);
                location.reload();
            }else{
                console.log(data);
            }
        }
    });
}

// Drop service
function sendServiceId(id){
    $('#dropService').val(id);
}

function drop_service(id){
    $.ajax({
        method: 'GET',
        url: `/services/delete/${id}`,
        contentType: JSON,
        processData: false,
        cache: false,
        success: data=>{
            if(data.status==200){
                location.reload();
                console.log(data);
            }else{
                console.log(data);
            }
        }
    });
}
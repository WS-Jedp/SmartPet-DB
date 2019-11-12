$(document).ready(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#typeUserForm').submit(e=>{
        e.preventDefault();
        var allData = new FormData();
        let formType = $('#typeUserForm').serializeArray();
        formType.forEach(e=>{
            allData.append(e.name, e.value)
        })
        $.ajax({
            method: 'POST',
            url: '/users/create',
            data: allData,
            contentType: false,
            cache: false,
            processData: false,
            success: data=>{
                console.log(data);
                $('#typeUserForm input[type="text"]').val('');
            }
        })
    });

    // Update typeUser
    $('#editTypeUserForm').submit(e=>{
       
        e.preventDefault();
        var allDataUpdate = new FormData();
        let updateFormType = $('#editTypeUserForm').serializeArray();
        updateFormType.forEach(e=>{
            allDataUpdate.append(e.name, e.value)
        }); 
        $.ajax({
            method: 'POST',
            url: '/users/update',
            data: allDataUpdate,
            contentType: false,
            cache: false,
            processData: false,
            success: (data)=>{
                console.log(data)
            }
        })
        console.log('Final')
    });
    


});
$(document).ready(function () {
	$('#id').on('blur', function () {
		var id = $('#id').val();
		if (id !== '') {
			$.ajax({
				url : 'ajax.php',
				type : 'POST',
				dataType : 'json',
				data : { id : id },
				success : function (data) {
					if (data.success) {
						var fname = '';
						var lname = '';
						var address = '';
						var email = '';
						var contact1 = '';
						var contact2 = '';
						if (data.staff) {
							fname = data.data.f_name;
							lname = data.data.l_name;
							contact1 = data.data.contact_no;
							email = data.data.email;
						} else {
							fname = data.data.v_fname;
							lname = data.data.v_lname;
							address = data.data.add_line1 + ', ' +  data.data.add_line1 + ', ' + data.data.add_line2 + ', ' + data.data.add_country;
							email = data.data.v_email;
							contact1 = data.data.v_contactno1;
							contact2 = data.data.v_contactno2;
						}
						$('#fname').val(fname);
						$('#lname').val(lname);
						$('#address').val(address);
						$('#contact1').val(contact1);
						$('#contact2').val(contact2);
						$('#email').val(email);

					} else {
						$('#fname').val("");
						$('#lname').val("");
						$('#address').val("");
						$('#contact1').val("");
						$('#contact2').val("");
						$('#email').val("");
					}
				}
			});
		}
	});
});
			var studentstat = [
    {"ID": "0", "Name": "Status(Fresher or Returning)"},
    {"ID": "Fresher", "Name": "Fresher"},
    {"ID": "Returning", "Name": "Returning"},
    ];
    
    var ab = document.getElementById('studentstat');
    for (var i = 0; i < studentstat.length; i++) {
    
    ab.innerHTML = ab.innerHTML +
        '<option value="' + studentstat[i]['ID'] + '">' + studentstat[i]['Name'] + '</option>';
    }
    
    
    function show(ab) {
    
    $("#slevel").empty();
    $('#write').val('');
    
    var sect = 
      {
        "Fresher": [
          "100 Level",
          "200 Level"
        ],
        "Returning": [
          "200 Level",
          "300 Level",
          "400 Level",
          "500 Level"
        ]
      };
    
    var message = ab.value;
    
    var ab1 = document.getElementById('slevel');
    
    for (i = 0; i < sect[message].length; i++) {
    
      $('#slevel1').show();
      $('#write1').show();
    
    ab1.innerHTML = ab1.innerHTML +
        '<option value="' + sect[message][i] + '">' + sect[message][i] + '</option>';
    }
    
    
        }
	
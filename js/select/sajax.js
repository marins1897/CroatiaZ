function sjx()
{
	
	var _site_root = '/';
	var d = new Array();
	for( var i = 1; i < arguments.length; i++ )
	{
		d[i-1] = arguments[i];
	}
	
	$.ajax({
		type: 'POST',
		url: _site_root+'lib/classes/SAjax.php',
		data: { fja: arguments[0], data: d },
		success: function(data){
			if( data )
			{
				for(var i=0; i<=data.length-1; i++)
				{
					switch (data[i].type)
					{
						case 'html':
							$('#'+data[i].id).html(data[i].content);
							break;
						case 'append':
							$('#'+data[i].id).append(data[i].content);
							break;
						case 'prepend':
							$('#'+data[i].id).prepend(data[i].content);
							break;
						case 'value':
							$('#'+data[i].id).val(data[i].content);
							break;
						case 'script':
							eval(data[i].content);
							break;
					}
				}
			}
		},
		dataType: "json"
	});
}

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
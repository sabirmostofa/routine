

$(document).ready(function(){
	var count=0;
	
	
	$('.more').each(function(){
		count++;		
		});
	
	for(var i=0;i<count*3;i++)$('.xtra'+i).hide();
	
	count=0;
	
	$('input').each(function(){		
		if($(this).hasClass('more')){
			count++;
			$(this).attr('test',count);
	
	              }			
			});
			
			
			$('td').each(function(){
				if($(this).text()=='')$(this).css('border','none');
				
				});
		
		count=0;
		var holder='';
		
	$('td .more').click(function(){					
		if(holder!=$(this).attr('test'))count=0;
		var test= $(this).attr('test');	
		holder=test;			
		var counter='.xtra'+((test-1)*3+count++);			
		$(counter).fadeIn('slow');	
		});
		
		var a='check';
		var b='11';
		$('#'+a+b).click(function(){
			alert('click');
			})
			
		//Preference page functions
				$('input').click(function(){
					
					var row= $(this).attr('class');
					var id='#'+row;
					$(id+' input:checkbox').each(function(){
						//alert($(this).attr('checked'));
						if($(this).attr('checked') == true){
							
						if($(this).attr('class') != row)	
						$(this).attr('checked',false);
						
					}
						else
						if($(this).attr('class') != row)							
						$(this).attr('checked','checked');
						})
				
					
					})
	
	
	});

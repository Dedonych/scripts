<php?
      function rands(){
	let $table = $("table").first().find(".user_rate.selectable")
	let ind =[]
	$table.each(function(){
		if ($(this).css("display")=='table-row')
			ind.push($(this).find('.name>a').attr('href'))
	}) 	
	open(ind[Math.floor(Math.random()*ind.length)])
}
rands()

tipJS.controller({
	name : "todoMVC.create",

	invoke : function( params ){
		tipJS.log(this.name);

		var globalTodos = this.loadModel("globalTodos", true),
			utils = this.loadModel("utils"),
			$input = params.input,
			e = params.event,
			val = $.trim( $input.val() );

		if ( e.which !== globalTodos.ENTER_KEY || !val ) {
			return;
		}
		globalTodos.todos.push({
			id: utils.uuid(),
			title: val,
			completed: false
		});
		$input.val('');
		this.loadView("renderer").updateView( globalTodos );
		this.loadModel("utils").store( globalTodos.STORE_KEY, globalTodos.todos );
	}
});

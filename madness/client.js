var game = {};

window.onload = function(){
	game = new game_core();
		game.viewport = document.getElementById('viewport');
		game.viewport.width = game.world.width;
		game.viewport.height = game.world.height;
		game.ctx = game.viewport.getContext('2d');
		game.ctx.font = '11px "Helvetica"';
	game.update( new Date().getTime() );

}; 

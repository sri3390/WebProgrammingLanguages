$(document).ready(function() {
var id = 1;	

$("#description").empty();
$("#imageposition").fadeIn(2000).html("<img src=\"images/Colosseum.jpg\" alt=\"Colosseum\"></img>");
$("#description").text(" The Colosseum also known as the Flavian Amphitheatre is an oval amphitheatre in the centre of the city of Rome, Italy. Built of concrete and stone,[1] it is the largest amphitheatre ever built and is considered one of the greatest works of architecture and engineering.");
$("#bu1").click(function(){
		id = 1;
		$("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
			$(this).fadeIn(2000).html("<img src=\"images/Colosseum.jpg\" alt=\"Colosseum\" title=\" The Colosseum \"></img>");
		});	
		$("#description").text("The Colosseum also known as the Flavian Amphitheatre is an oval amphitheatre in the centre of the city of Rome, Italy. Built of concrete and stone,[1] it is the largest amphitheatre ever built and is considered one of the greatest works of architecture and engineering.");
    });

$("#bu2").click(function(){
		id = 2;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
			$("#imageposition").fadeIn(2000).html("<img src=\"images/Cristo_Redentor.jpg\" alt=\"Cristo_Redentor\"></img>");	
		});
		$("#description").text("Christ the Redeemer is an Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, created by French sculptor Paul Landowski and built by the Brazilian engineer Heitor da Silva Costa, in collaboration with the French engineer Albert Caquot.");
    });
$("#bu3").click(function(){
		id = 3;
		$("#description").empty();
        $("#imageposition").fadeOut(2000,function(){
			$("#imageposition").fadeIn(2000).html("<img src=\"images/eiffeltower.jpg\" alt=\"eiffeltower\"></img>");
		});
		$("#description").text("The Eiffel Tower is an iron lattice tower located on the Champ de Mars in Paris, France. It was named after the engineer Alexandre Gustave Eiffel, whose company designed and built the tower.");
    });
$("#bu4").click(function(){
		id = 4;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/Peru_Machu_Picchu.jpg\" alt=\"Peru_Machu_Picchu\"></img>");
		});
		$("#description").text("Machu Picchu or Machu Pikchuis a 15th-century Inca site located 2,430 metres (7,970 ft) above sea level. It is located in the Cusco Region, Urubamba Province, Machupicchu District in Peru.");
    });
$("#bu5").click(function(){
		id=5;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/Pisatower.jpg\" alt=\"Pisatower\"></img>");
		});
		$("#description").text("The Leaning Tower of Pisa or simply the Tower of Pisa is the campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its unintended tilt.");
    });
$("#bu6").click(function(){
		id = 6;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
			$("#imageposition").fadeIn(2000).html("<img src=\"images/pyramids.jpg\" alt=\"pyramids\"></img>");
		});	
		$("#description").text("The Egyptian pyramids are ancient pyramid-shaped masonry structures located in Egypt. Most were built as tombs for the country's pharaohs and their consorts during the Old and Middle Kingdom periods. ");
    });
$("#bu7").click(function(){
		id = 7;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/tajmahal.jpg\" alt=\"tajmahal\"></img>");
		});
		$("#description").text("The Taj Mahal is a white marble mausoleum located on the southern bank of the Yamuna River in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned 1628–1658) to house the tomb of his favorite wife of three, Mumtaz Mahal.");
    });
$("#bu8").click(function(){
		id = 8;
        $("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/wallofchina.jpg\" alt=\"wallofchina\"></img>");
		});
		$("#description").text("The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe.");
    });
	
$("#next").click(function(){
	id++;
	if(id > 8 || id == 1) {
		id = 1;
		$("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/Colosseum.jpg\" alt=\"Colosseum\"></img>");
		});
		$("#description").text("The Colosseum also known as the Flavian Amphitheatre is an oval amphitheatre in the centre of the city of Rome, Italy. Built of concrete and stone,[1] it is the largest amphitheatre ever built and is considered one of the greatest works of architecture and engineering.");
	}
	else{
		if(id == 2){
		$("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
			$("#imageposition").fadeIn(2000).html("<img src=\"images/Cristo_Redentor.jpg\" alt=\"Cristo_Redentor\"></img>");
		});
		$("#description").text("Christ the Redeemer is an Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, created by French sculptor Paul Landowski and built by the Brazilian engineer Heitor da Silva Costa, in collaboration with the French engineer Albert Caquot.");;
		}
		else{
			if(id == 3){
				$("#description").empty();
				$("#imageposition").fadeOut(2000,function(){
						$("#imageposition").fadeIn(2000).html("<img src=\"images/eiffeltower.jpg\" alt=\"eiffeltower\"></img>");
				});	
				$("#description").text("The Eiffel Tower is an iron lattice tower located on the Champ de Mars in Paris, France. It was named after the engineer Alexandre Gustave Eiffel, whose company designed and built the tower.");;
			}
			else{
				if(id == 4){
					$("#description").empty();
					$("#imageposition").fadeOut(2000,function(){
							$("#imageposition").fadeIn(2000).html("<img src=\"images/Peru_Machu_Picchu.jpg\" alt=\"Peru_Machu_Picchu\"></img>");
					});
					$("#description").text("Machu Picchu or Machu Pikchuis a 15th-century Inca site located 2,430 metres (7,970 ft) above sea level. It is located in the Cusco Region, Urubamba Province, Machupicchu District in Peru.");
				}
				else{
				if(id == 5){
					$("#description").empty();
					$("#imageposition").fadeOut(2000,function(){
							$("#imageposition").fadeIn(2000).html("<img src=\"images/Pisatower.jpg\" alt=\"Pisatower\"></img>");
					});
					$("#description").text("The Leaning Tower of Pisa or simply the Tower of Pisa is the campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its unintended tilt.");;
				}
				else{
					if(id == 6){
						$("#description").empty();
						$("#imageposition").fadeOut(2000,function(){
								$("#imageposition").fadeIn(2000).html("<img src=\"images/pyramids.jpg\" alt=\"pyramids\"></img>");
						});
						$("#description").text("The Egyptian pyramids are ancient pyramid-shaped masonry structures located in Egypt. Most were built as tombs for the country's pharaohs and their consorts during the Old and Middle Kingdom periods. ");;
					}
					else{
						if(id == 7){
							$("#description").empty();
							$("#imageposition").fadeOut(2000,function(){
									$("#imageposition").fadeIn(2000).html("<img src=\"images/tajmahal.jpg\" alt=\"tajmahal\"></img>");
							});
							$("#description").text("The Taj Mahal is a white marble mausoleum located on the southern bank of the Yamuna River in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned 1628–1658) to house the tomb of his favorite wife of three, Mumtaz Mahal.");;
							}
							else{
								if(id == 8){
									$("#description").empty();
									$("#imageposition").fadeOut(2000,function(){
											$("#imageposition").fadeIn(2000).html("<img src=\"images/wallofchina.jpg\" alt=\"wallofchina\"></img>");
									});
									$("#description").text("The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe.");;
								}
							}
					}
				}
			}
		}
	}
	}
});	

$("#prev").click(function(){
	id--;
	if(id<1){
		id = 8;
	}
	if(id > 8 || id == 1) {
		$("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/Colosseum.jpg\" alt=\"Colosseum\"></img>");
		});
		$("#description").text("The Colosseum also known as the Flavian Amphitheatre is an oval amphitheatre in the centre of the city of Rome, Italy. Built of concrete and stone,[1] it is the largest amphitheatre ever built and is considered one of the greatest works of architecture and engineering.");
	}
	else{
		if(id == 2){
		$("#description").empty();
		$("#imageposition").fadeOut(2000,function(){
				$("#imageposition").fadeIn(2000).html("<img src=\"images/Cristo_Redentor.jpg\" alt=\"Cristo_Redentor\"></img>");
		});
		$("#description").text("Christ the Redeemer is an Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, created by French sculptor Paul Landowski and built by the Brazilian engineer Heitor da Silva Costa, in collaboration with the French engineer Albert Caquot.");
		}
		else{
			if(id == 3){
				$("#description").empty();
				$("#imageposition").fadeOut(2000,function(){
						$("#imageposition").fadeIn(2000).html("<img src=\"images/eiffeltower.jpg\" alt=\"eiffeltower\"></img>");
				});
				$("#description").text("The Eiffel Tower is an iron lattice tower located on the Champ de Mars in Paris, France. It was named after the engineer Alexandre Gustave Eiffel, whose company designed and built the tower.");
			}
			else{
				if(id == 4){
					$("#description").empty();
					$("#imageposition").fadeOut(2000,function(){
							$("#imageposition").fadeIn(2000).html("<img src=\"images/Peru_Machu_Picchu.jpg\" alt=\"Peru_Machu_Picchu\"></img>");
					});
					$("#description").text("Machu Picchu or Machu Pikchuis a 15th-century Inca site located 2,430 metres (7,970 ft) above sea level. It is located in the Cusco Region, Urubamba Province, Machupicchu District in Peru.");
				}
				else{
				if(id == 5){
					$("#description").empty();
					$("#imageposition").fadeOut(2000,function(){
							$("#imageposition").fadeIn(2000).html("<img src=\"images/Pisatower.jpg\" alt=\"Pisatower\"></img>");
					});
					$("#description").text("The Leaning Tower of Pisa or simply the Tower of Pisa is the campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its unintended tilt.");
				}
				else{
					if(id == 6){
						$("#description").empty();
						$("#imageposition").fadeOut(2000,function(){
								$("#imageposition").fadeIn(2000).html("<img src=\"images/pyramids.jpg\" alt=\"pyramids\"></img>");
						});
						$("#description").text("The Egyptian pyramids are ancient pyramid-shaped masonry structures located in Egypt. Most were built as tombs for the country's pharaohs and their consorts during the Old and Middle Kingdom periods. ");
					}
					else{
						if(id == 7){
							$("#description").empty();
							$("#imageposition").fadeOut(2000,function(){
									$("#imageposition").fadeIn(2000).html("<img src=\"images/tajmahal.jpg\" alt=\"tajmahal\"></img>");
							});
							$("#description").text("The Taj Mahal is a white marble mausoleum located on the southern bank of the Yamuna River in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned 1628–1658) to house the tomb of his favorite wife of three, Mumtaz Mahal.");
							}
							else{
								if(id == 8){
									$("#description").empty();
									$("#imageposition").fadeOut(2000,function(){
										$("#imageposition").fadeIn(2000).html("<img src=\"images/wallofchina.jpg\" alt=\"wallofchina\"></img>");
									});
									$("#description").text("The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe.");
								}
							}
					}
				}
			}
		}
	}
	}
});	

});
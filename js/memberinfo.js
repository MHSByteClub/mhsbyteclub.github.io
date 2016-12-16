//Generating member cards//
			
			//sample members//
			
			
			
			//member prototype constructor//
			function member(lastname,firstname, role, meetings,streak,level,interests,quote,githubID,pictureURL){
				this.firstName = firstname;
				this.lastName = lastname;
				this.meetings = meetings;
				this.role = role;
				this.streak = streak;
				this.level = level;
				this.interests = interests;
				this.quote = quote;
				this.webURL = 'http://'+githubID+'.github.io';
				this.pictureURL = pictureURL;
				
				
			}
			
			var stepney = new member('Stepney','Kenny','President',9,9,'Veteran','Coding, Music, General Mischief', "Don't be D.R.Y.",'theexceptionist','https://avatars1.githubusercontent.com/u/9342315?v=3&s=400');
			var farmer = new member ('Farmer','Mr.','Sponsor',18,18,'Sponsor', 'Coding, Physics, Hysterical puns', 'Physics is Phun...get it?', 'mrfarmer777', 'https://scontent.cdninstagram.com/t51.2885-15/s480x480/e15/10683800_829787670387534_1185898204_n.jpg?ig_cache_key=ODEwODkwNTgyMTk4NDc0OTUz.2');
			var nickl = new member ('Nickl','Alex','Active Member',18,18,'Novice','Coding','Funny Quotes!','djbmo','tile.png');
			var grabski = new member ('Grabski','Benjamin','Active Member',18,18,'Novice','Coding','Funny Quotes!','beng-1','tile.png');
			var vozymko = new member('Ozmko','Victoria','Vice President',18,18,'Novice','Coding','Funny Quotes!','Montyfish','tile.png');
			var montero = new member('Montero','Angel','Secretary/Webmaster',18,18,'Journeyman','Coding','Funny Quotes!','angelmontheod','tile.png');
			var kpatel = new member('Patel','Komol','Secretary',18,18,'Novice','Coding','Funny Quotes!','KomolPatel','tile.png')
			var nozymko = new member('Ozymko', 'Natalia', 'Vice President', 18,18,'Veteran', 'Coding, Karate, Hedgehogs, and Pineapples', 'Yeee', 'Pinkerfish', 'https://media.giphy.com/media/14oFkpKMd6olji/giphy.gif');
			var members = [stepney,farmer,nickl,grabski,vozymko,montero,kpatel,nozymko];
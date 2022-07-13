console.log('Hello, world!')

// number of cards and all cards
const ln = 13;
const cards = [0,1,2,3,4,5,6,7,8,9,10,11,12];

// phase 0 -> Blind bets
// phase 1 -> With 3 cards
// phase 2 -> With 4 cards
// phase 3 -> With 5 cards
const phase = [0,1,2,3];

function rand(nb) {
  return Math.floor(Math.random() * nb);
}

function createPlayer(playerName) {
  const myPlayer = {
    hand: [], 
    name: "", 
    bet: 0, 
    betThisTour: 0, 
    sleeping: false
  }
  const myHand = [rand(ln), rand(ln)];
  myPlayer.hand = myHand;
  myPlayer.name = playerName;
  return myPlayer;
}

// todo
function createTable() {
  const tableH = Array(5).fill(rand(ln));
  return tableH;
}

// A game contains multiple tours 
//  which contains multiple rounds
function startTour(nbPlayers) {
  const table = createTable();
  console.log("table", table)
  return table;
}

function makeARound(phase, players) {
  if (phase === 0){
    const playerArr = Object.keys(players);
    const lnPl = playerArr.length;

    players[playerArr[0]].betThisTour = 2;
    players[playerArr[1]].betThisTour = 4;

    console.log("makeARound", players)
    let allOk = false;
    while (!allOk) {
      let highest = 0;
      let awake = lnPl;
      for (let i=0; i<lnPl; i++) {
        let idx = playerArr[i]
        // console.log("what", players[])
        // if (players[i].sleep) {
        //   awake -= 1;
        // }
        if (players[idx].betThisTour > highest)       
        {
          console.log("if with idx", idx)
          highest = players[idx].betThisTour;
           console.log("if wit highest",players[idx].betThisTour,  highest)
        } else {
          console.log("else")
          // Player must play
          makeAChoice(i, players);
          allOk = true;
        }
      }
      if (awake < 2) {
        allOk = true;
      }
    }
    return players;
  }
    
} 

function makeAChoice(whoIsPlaying, players) {
  const choice = prompt("what do you do ? s = sleep, f = follow, r = raise");

  if (choice == "s") {
    players[whoIsPlaying].sleep = true;
  }

  return players;
}

function startGame(nbPlayers, playersName) {
  const setUpPlayers = {};

  for (let i=0; i<nbPlayers; i++) {
    setUpPlayers[i] = createPlayer(playersName[i]);
  }

  const players = makeARound(0, setUpPlayers);
  console.log("players", players)
}

startGame(2, ["Mago", "Dg"])
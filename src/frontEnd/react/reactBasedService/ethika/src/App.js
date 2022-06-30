import 'bootstrap/dist/css/bootstrap.min.css';
import {Container, Row} from "react-bootstrap";
import {useEffect, useState} from "react";
import {GamesRepository} from "./repositories/GamesRepository";
import {Games} from "./components/Games";

function App() {

    let gamesRepository = new GamesRepository();
    let jsxGames = null;
    const [games,setGames] = useState([]);
    const [onGameRun,setGameRun] = useState(0);

    useEffect(() => {
        gamesRepository.all().then((response) =>{
            setGames(response);
        })
    },[onGameRun]);

    if(games){
        jsxGames = <Games games={games}/>
    }


  return (
    <Container>
        {jsxGames}
    </Container>
  );
}

export default App;

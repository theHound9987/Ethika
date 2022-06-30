import {Row} from "react-bootstrap";
import {Game} from "./Game";

export function Games(props){
    let jsxGames = props.games.map((game) => {
        <Game key={game.id} name={game.name} nickname={game.nickname} rating={game.sum_rating} created={game.created_at} update={game.updated_at}/>
    });
    return (
        <Row>
            {jsxGames}
        </Row>
    );
}
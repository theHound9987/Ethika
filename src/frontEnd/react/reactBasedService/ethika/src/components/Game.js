import {Card} from "react-bootstrap";

export function Game(props){
    return (
        <Card>
            <Card.Title>{props.name}</Card.Title>
            <Card.Body>
                {props.nickname}<br/>
                {props.rating}<br/>
                {props.created}
            </Card.Body>
        </Card>
    );
}
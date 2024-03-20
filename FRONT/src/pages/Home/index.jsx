import './index.css';
import image from './../../assets/quizzeo2-removebg.png';
import  Button  from './../../components/Button';

function Home() {
  return (
    <div className="home">
     <div className="background-img"></div>
        <img src={image} alt='' />
        <div className='ButtonLogin'>
          <Button.Primary Label="Se connecter"/>
          <br></br>
          <Button.Primary Label="S'inscrire"/>
        </div>

    </div>
  );
}

export default Home;

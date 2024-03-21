import './index.css';
import image from './../../assets/quizzeo2-removebg.png';
import  Button  from '../../components/Button';

function Home() {

  function navigationlogin() {
    window.location.href = "/login";
  }
  function navigationsingin() {
    window.location.href = "/login-s";
  }

  return (
    <div className="home">
     <div className="background-img"></div>
     <div className="content-home">
        <img src={image} alt='' />
        <div className='ButtonLogin'>
          <Button.Primary Label="Se connecter" OnClick={navigationlogin}/>
          <br></br>
          <Button.Primary Label="S'inscrire" OnClick={navigationsingin}/>
        </div>
      </div>

    </div>
  );
}

export default Home;

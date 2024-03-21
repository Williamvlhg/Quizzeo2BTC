import './index.css';
import image from './../../assets/quizzeo2-removebg.png';
import  Button  from '../../components/Button';

function Home() {

  function navigationlogin() {
    window.location.href = "/login";
  }

  return (
    <div className="home">
     <div className="background-img"></div>
      <div className="content-home">
          <img src={image} alt='' />
          <div className='button-login'>
            <Button.Primary label="Jouer" onClick={navigationlogin}/>
          </div>
      </div>
    </div>
  );
}

export default Home;

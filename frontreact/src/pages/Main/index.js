import './index.css';
import image from './../../assets/quizzeo2-removebg.png';
import axios from 'axios';
import { useEffect } from 'react';

function Main() {

    useEffect(() => {
        const verifierSession = async () => {
            try{
                const response = await axios.get('http://localhost:8888/verification.php');
                if(response.data === 'valide'){
                    console.log(response.data); 
                }else{
                    window.location.href = "/login";
                }
            } catch (error){
                console.error("Erreur lors de la vérification de la session:", error);
            }
        };
        const interval = setInterval(verifierSession, 300000);
        return () => clearInterval(interval);
    }, []);

  return (
    <div className="home">
     <div className="background-img"></div>
      <div className="content-home">
          <img src={image} alt='' />
          <h1 className="">Bienvenue</h1> 

      </div>
    </div>
  );
}

export default Main;

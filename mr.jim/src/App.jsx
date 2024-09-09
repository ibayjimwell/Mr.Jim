import NavBar from "./components/NavBar";
import Intro from "./components/Intro";
import Cards from "./components/Cards";

function App() {
  return (
    <>
      <NavBar></NavBar>
      <main className='mt-10'>
        <Intro></Intro>
        <div className='py-10 md:py-20'></div>
        <Cards></Cards>
      </main>
    </>
  );
}

export default App;

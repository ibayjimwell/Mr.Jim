import MainButton from "./MainButton"

function Intro() {
  return (
    <>
        <section id='intro'>
            <div className='

            flex
            flex-col
            gap-2
            px-5

            md:px-10

            '>
                <h1 className='

                text-gray-50 
                text-3xl
                font-header
                font-bold

                md:text-5xl
                
                '>Jimwell Bustos Ibay</h1>
                <p className='

                text-gray-400
                text-base
                font-text

                md:text-xl

                '>A fullstack developer that can build web apps for your needs with the latest technologies and frameworks.</p>
            </div>
            <div className='

            mx-5 
            mt-8

            md:mx-10

            '>
              <MainButton text='Download CV'></MainButton>
            </div>
        </section>
    </>
  )
}

export default Intro
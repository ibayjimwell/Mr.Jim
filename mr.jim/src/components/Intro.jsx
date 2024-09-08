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
                <div className='

                text-gray-50 
                text-3xl
                font-header
                font-bold

                md:text-5xl
                
                '>Jimwell Bustos Ibay</div>
                <div className='

                text-gray-400
                text-base
                font-text

                md:text-xl

                '>Aenean dolor ante, consequat ut convallis a, dapibus a neque. Nullam non enim non leo mattis aliquam.</div>
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
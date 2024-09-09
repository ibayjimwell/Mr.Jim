import CardLink from "./CardLink"

function Cards() {
  return (
    <>
        <section id='project'>
            <div className='
            
            grid 
            grid-rows-3
            gap-5
            px-10

            md:grid-cols-3
            md:gap-0
            md:justify-center
            md:justify-items-center
            
            '>
                <CardLink 

                url='#' 
                title='Lorem ipsum dolor sit amet'
                text='Aenean dolor ante, consequat ut convallis a, dapibus a neque. Nullam non enim non leo mattis aliquam.'

                ></CardLink>

                <CardLink 

                url='#' 
                title='Lorem ipsum dolor sit amet'
                text='Aenean dolor ante, consequat ut convallis a, dapibus a neque. Nullam non enim non leo mattis aliquam.'

                ></CardLink>

                <CardLink 

                url='#' 
                title='Lorem ipsum dolor sit amet'
                text='Aenean dolor ante, consequat ut convallis a, dapibus a neque. Nullam non enim non leo mattis aliquam.'

                ></CardLink>

            </div>
        </section>
    </>
  )
}

export default Cards
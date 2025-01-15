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

                url='https://removebg.up.railway.app/' 
                title='Background Remover'
                text='Easily remove backgrounds from your photos and images with our powerful and intuitive tool. Perfect for e-commerce, social media, and more!'

                ></CardLink>

                <CardLink 

                url='https://greenjobs.vercel.app/' 
                title='Green Jobs'
                text='Browse or post an environmental jobs that you can work, fulltime or partime to contribute to save the mother earth.'

                ></CardLink>

                <CardLink 

                url='https://timeny.vercel.app/' 
                title='Timeny'
                text='Know your remaining life according to average life expectancy of human and discover more info about your birthday.'

                ></CardLink>

            </div>
        </section>
    </>
  )
}

export default Cards

function CardLink({title, text, url}) {
  return (
    <>
        <article className='
        
        bg-gray-800
        p-5
        max-w-sm
        rounded-sm

        md:rounded-md
        md:max-w-md
        
        '>
            <div className='
            
            flex
            flex-col
            gap-1
            
            '>

                <h2 className='
                
                font-header
                font-bold
                text-sm
                text-gray-50

                md:text-base

                '>
                    {title}
                </h2>

                <p className='
                
                font-text
                text-xs
                text-gray-50

                md:text-sm
                
                '>
                    {text}  
                </p>

            </div>

            <a href={url} className='
            
            font-text
            text-xs
            text-blue-600

            md:text-sm
            
            '>Check it out</a>

        </article>
    </>
  )
}

export default CardLink

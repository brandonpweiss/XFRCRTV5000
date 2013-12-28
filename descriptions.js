var descriptions = [
    "<span class='black'>PHASE 1: INTRODUCTION AND CONSULTATION</span> <br> This is the &quot;discovery&quot; phase of every project. Our favorite part of the entire process is getting to know you, discovering what your needs are, and finding out how we can help your business really BOOM.  In this phase, not only will we get to know you, the client, but your audience/target market as well.  In the game of conversions, knowing the audience is priority.",
      
      "<span class='black'>PHASE 2: CONCEPTUALIZATION & STRATEGY</span> <br> This is the planning stage of your project. In this stage, we will find out what the most effective way to reach your target market and or customer is, and flesh out the assets neede to execute it.  We will also decide on the voice that will be used when engaging the customer.",
  	  
  	  "<span class='black'>PHASE 3: BRANDING & VISUAL DIRECTION</span> <br> In phase three, we'll use what we've discovered about your business and your audience to create the perfect visual representation of your business, and match it with your target audience.  Put on your sunglasses for this one, because our design team has been known to dazzle.",
    
    "<span class='black'>PHASE 4: USER EXPERIENCE & DESIGN</span> <br> This stage is where we determine the journey that the end user/customer will take when interacting with your campaign.  In today's world, it's not enough to inform your customer, it's all about engagement.  Together, we'll create innovative methods to engage the customer, and take them through the journey to a conversion from &quot;visitor&quot; to &quot;customer&quot;.",
    
    "<span class='black'>PHASE 5: CREATIVE ASSET PRODUCTION</span> <br> Our production team will bring the assets to life in this phase, and begin implementing them on different collateral, in order to reach your customer through all the appropriate, effective channels of communication.",

   "<span class='black'>PHASE 6: DEVELOPMENT</span> <br> In this phase, our versatile development team will create an amazing interactive experience for your customer.  Our team is well-versed in responsive web design, web development, SEO, semantic HTML5, CSS, and JavaScript, as well as the appropriate scripting and SQL langauages used in modern development.  We will create a deep interactive experience for your end user that translates amongst many modern browsers and devices.",

   "<span class='black'>PHASE 7: INBOUND MARKETING PLATFORM</span> <br> Our team will launch a campaign to keep your customer engaged.  This may include Google Ads, Facebook Ads, print marketing, email marketing, social media marketing, and other creative, innovative ways to keep in direct contact with your customer.",
 

   "<span class='black'>PHASE 8: CAMPAIGN OPERATIONS & MANAGEMENT</span> <br> In the last phase of the cycle, we'll gather valuable data and analytics from your customer, and find out what their real feedback and reaction is to your business, product, service, and/or campaign.  From here, we'll use this information to regroup and readjust the campaign to suit your customer's needs.",
];
var value = 0
var i = 0;
$(".next").rotate({bind:{
      click: function(){
      	  value -=45;
          if (i == 7) {
           i = 0;   
          } else {
          i++;
          }
          $(".description").html(descriptions[i]);
          $(".diagram").rotate({
            duration:50,	
            animateTo:value
          })
      }
  }
});
$(".prev").rotate({bind:{
      click: function(){
      	  value +=45;
          if (i == 0) {
           i = 7;   
          } else {
          i--;
          }
          $(".description").html(descriptions[i]);
          $(".diagram").rotate({
            duration:50,	
            animateTo:value
          })
      }
  }
});
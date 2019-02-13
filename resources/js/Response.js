function response(theclaimed, relationship, media) {
    //  let obj = {
    //      'fwb' : [`Hey , @${theclaimed}, Anon says you guys have been duking it down for ${length} and ${personal} feelings their end. Do you want to find out who claimed you? Click the link in our bio to find out`, `@${theclaimed} what’s up between you and Anon that have been together for ${length}? Are you friends? Are you lovers? Is it just sex? What are you? Well, ${personal} feelings their end though. Find out who said you are FWBs with the link in our bio.`, `One of the many mysteries or life is how true love can come from anywhere?  @${theclaimed} do not let this opportunity pass you by, Anon has claimed that you have been together for ${length} and ${personal} feelings their end. Could this be love? Is this claim right? Anon is waiting for you to confirm with the link in our bio.`, `Sometimes, your friend is actually your soulmate. @${theclaimed} Don’t you want to know who has claimed you for ${length} and ${personal} feelings their end? Click the link in our bio to find out.`, `Hello, relationship calling, why ah u running dear? @${theclaimed} . Anon thinks you are soulmates, afterall you have been slumming it for ${length} and ${personal} feelings their end. Click the link in our bio to discover who your new soulmate might be, you never know.`],
    //      'wife' : [`Hey @${theclaimed}, It is looking like this your marriage with Anon for ${length} that you both do the do on a ${personal} basis will last forever oh. Are you even married? Find out who claims to be married to you from the link in our bio.`, `Listen @${theclaimed}, true love is hard to find, hold your husband of ${length} tight to ya chest and keep slumming it on a ${personal} basis if not more o. Verify your wedding with the link in the bio`, `@${theclaimed} E be like say you don find your ride or die o, you guys be like bonnie and Clyde. Send your partner of about ${length} a sweet message too with the link in the bio and shag him more than ${personal} o.`, `This your marriage na die o haba, congratulations on winning the lottery for ${length}. The ${personal} sex can be improved too. @${theclaimed} but wait oh, are you really married to this person? Verify this claim with the link in the bio`, `@${theclaimed} Is your marriage heading for the rocks? The ${personal} sex for ${length} no dey enough o. Find out who thinks so with the link in the bio`],
    //      'boyfriend' : [`Hey @${theclaimed}, are you your bae’s bae? Has she wasted about ${length} thinking you are bae? She said ${personal}, when asked if you have cheated before.  Click the link in the bio to find out who thinks you are bae.`,`Hear ye hear ye @${theclaimed}, this thing with Anon must lead to marriage oh after ${length} together and ${personal}, unless... Click the link in the bio to verify this claim`, `Omo dem don make you fall in love oh, see as you dey shine like fluorescent bulb for ${length} and ${personal}. @${theclaimed} Verify this claim with the link in the bio.`, `Hold your significant other. Tell them that you love them. Put your lips together and plant a kiss. @${theclaimed} Find out who thinks you have been dating for about ${length} and said ${personal}, when asked if you have cheated before, with the link in the bio.`,`Is the bae you’re claiming, also claiming you? @${theclaimed} click to find out who this is your bae of ${length} is and ${personal} with the link in the bio!`],
    //      'girlfriend' : [`Hey @${theclaimed}, are you your bae’s bae? Has she wasted about ${length} thinking you are bae? She said ${personal}, when asked if you have cheated before.  Click the link in the bio to find out who thinks you are bae.`]
    //  }
    let obj = {
        fwb: [
            `Hey @${theclaimed},  have been duking it down.`,
            `@${theclaimed} what's up between you and @anon? Are we friends? Are we lovers? Is it just sex? What are we?`,
            `One of the many mysteries or life is how true love can spring forth from anywhere @${theclaimed} do not let this opportunity pass you by I who has claimed you.`,
            `Sometimes, your friend is actually your soulmate @${theclaimed}`,
            `Hello, relationship calling, why are u running dear? @${theclaimed}`
        ],
        husband: [
            `Hey @${theclaimed}, It is looking like this your marriage with I will last forever oh.`,
            `Listen @${theclaimed}, true love is hard to find, hold your wife tight to ya chest.`,
            `E be like say you don find your ride or die, you guys be like bonnie and Clyde. @${theclaimed}`,
            `This your marriage na die, congratulations on winning the lottery. @${theclaimed}`,
            `Is your marriage heading for the rocks? @${theclaimed} Find out now on #claimyourboo`
        ],
        wife: [
            `Hey @${theclaimed}, It is looking like this your marriage with I will last forever oh.`,
            `Listen @${theclaimed}, true love is hard to find, hold your wife tight to ya chest.`,
            `E be like say you don find your ride or die, you guys be like bonnie and Clyde. @${theclaimed}`,
            `This your marriage na die, congratulations on winning the lottery. @${theclaimed}`,
            `Is your marriage heading for the rocks? @${theclaimed} Find out now on #claimyourboo`
        ],
        "side chick": [
            `Things are happening oh @${theclaimed}, are you sure you don't want to upgrade? `,
            `This thing na relationship my people, make una no dey deceive una self. @${theclaimed}.`,
            `Are you fine with being the side? Or are you willing to be the main? @${theclaimed}`,
            `You were not born to be a side, you are a whole meal! @${theclaimed}.`,
            `So @${theclaimed}, what do you think about upgrading me from side to main? How about dah?`
        ],
        "side dick": [
            `Things are happening oh @${theclaimed}, are you sure you don't want to upgrade? `,
            `This thing na relationship my people, make una no dey deceive una self. @${theclaimed}.`,
            `Are you fine with being the side? Or are you willing to be the main? @${theclaimed}`,
            `You were not born to be a side, you are a whole meal! @${theclaimed}.`,
            `So @${theclaimed}, what do you think about upgrading me from side to main? How about dah?`
        ],
        situationship: [
            `See ehn, @${theclaimed} isn't it time you claimed me? What do you think? Yay or nay.`,
            `You don day do the do for sometime now, is it not time to go official? Abi ki lo feel? @${theclaimed}`,
            `Taa! pesin don claim you on claimyourboo @${theclaimed}`,
            `@${theclaimed} Don't you think this thing you have with me should have become more serious by now?`,
            `@${theclaimed}, I am very confused by you oh, are you guys actually a thing?`
        ],
        boyfriend: [
            `Hey @${theclaimed}, are you your bae's bae?`,
            `Hear ye hear ye @${theclaimed} this thing with me must lead to marriage oh, unless…..`,
            `Omo dem don make you fall in love oh, see as you dey shine like light bulb. @${theclaimed}`,
            `Hold your significant other. Tell them that you love them. Put your lips together and plant a kiss. @${theclaimed}`,
            `Is the bae you're claiming, also claiming you? @${theclaimed}`
        ],
        girlfriend: [
            `Hey @${theclaimed}, are you your bae's bae?`,
            `Hear ye hear ye @${theclaimed} this thing with me must lead to marriage oh, unless…..`,
            `Omo dem don make you fall in love oh, see as you dey shine like light bulb. @${theclaimed}`,
            `Hold your significant other. Tell them that you love them. Put your lips together and plant a kiss. @${theclaimed}`,
            `Is the bae you're claiming, also claiming you? @${theclaimed}`
        ],
        "fuck buddies": [
            `Hmmm @${theclaimed}, you better get out of this thing with me before your case turn to I thy no.`,
            `Roses are red, violets are blue, keep doing the sex, nothing do you. @${theclaimed}`,
            `Let me hit you with the hard truth, sex is all you're getting from this with @${theclaimed}`,
            `Oh you getting some of that good sex, don't spoil it oh. @${theclaimed}`,
            `Chillee! If what you really want is relationship, what are you guys doing? @${theclaimed}`
        ]
    };

    let twitter = {
        fwb: ["giphy.gif", "fwb2.gif", "fwb3.gif", "fwb4.gif", "fwb5.gif"],
        husband: ["wh1.gif", "wh2.gif", "wh3.gif", "wh4.gif", "wh5.gif"],
        wife: ["wh1.gif", "wh2.gif", "wh3.gif", "wh4.gif", "wh5.gif"],
        "side chick": [
            "chick1.gif",
            "chick2.gif",
            "chick3.gif",
            "chick4.gif",
            "chick5.gif"
        ],
        "side dick": [
            "chick1.gif",
            "chick2.gif",
            "chick3.gif",
            "chick4.gif",
            "chick5.gif"
        ],
        situationship: [
            "sit1.gif",
            "sit2.gif",
            "sit3.gif",
            "sit4.gif",
            "sit5.gif"
        ],
        boyfriend: [
            "bfgf1.gif",
            "bfgf2.gif",
            "bfgf3.gif",
            "bfgf4.gif",
            "bfgf5.gif"
        ],
        girlfriend: [
            "bfgf1.gif",
            "bfgf2.gif",
            "bfgf3.gif",
            "bfgf4.gif",
            "bfgf5.gif"
        ],
        "fuck buddies": ["fb1.gif", "fb2.gif", "fb3.gif", "fb4.gif", "fb5.gif"]
    };

    let instagram = {};

    let rand = getRandomInt(5);
    return {
        result: obj[relationship][rand],
        image:
            media === "twitter"
                ? twitter[relationship][rand]
                : instagram[relationship][rand]
    };
}
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}
export default response;

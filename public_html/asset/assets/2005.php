<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Script" referent="RBX0">
		<Properties>
			<bool name="Disabled">false</bool>
			<Content name="LinkedSource"><null></null></Content>
			<string name="Name">Chat Regen</string>
			<ProtectedString name="Source">--Thank you for using coollanluke&apos;s chat/regen script!
--You know those cool games where if you say regen it will regen, well you can have it too! It&apos;s really easy!

model = game.Workspace.houseparts--Where it says &quot;ModelName&quot; put the name of the model you want to regen.
backup = model:clone() -- makes a backup copy of your model, which you will use later

function onChatted(msg, recipient, speaker) 

local source = string.lower(speaker.Name)
msg = string.lower(msg) --If you have caps troubles, not a problem! It will still work!

if (msg == &quot;builders&quot;) then --Where it says &quot;regen&quot; change it or keep it to what ever you want. This is what you must say for it to work.

model:remove()
model = backup:clone() 
model.Parent = game.Workspace 
model:makeJoints() 
end 

end 

--This is very important for the script, if it&apos;s deleated it won&apos;t work. Don&apos;t ever deleat this in any script unless you know what you&apos;re doing.

function onPlayerEntered(newPlayer) 
newPlayer.Chatted:connect(function(msg, recipient) onChatted(msg, recipient, newPlayer) end) 
end 

game.Players.ChildAdded:connect(onPlayerEntered)

--All done! Easy huh? Now go test it out! Remember the word you have to say to regen it!
--Please report any problems to coollanluke.

--Green Lightning&apos;s Green-Tech (C) 2009. All rights reserved.</ProtectedString>
			<bool name="archivable">true</bool>
		</Properties>
	</Item>
</roblox>


